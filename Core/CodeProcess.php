<?php

namespace Core;

class CodeProcess {

    public static function stripslashes_deep($value) {
        $value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);

        return $value;
    }

    public function convertEncryptDecrypt($action, $string) {
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $secret_key = 'ENCRYPTION_KEY';
        $secret_iv = 'ENCRYPTION_KEY';
        // hash
        $key = hash('sha256', $secret_key);
        // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
        $iv = substr(hash('sha256', $secret_iv), 0, 16);
        if ($action == 'encrypt') {
            $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
        } else if ($action == 'decrypt') {
            $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
        }
        return $output;
    }

    public function dirToArray($dir) {
        $result = array();
        if (\Core::fileExists($dir)) {
            $cdir = scandir($dir);
            if (\Core::countArray($cdir) > 0) {
                foreach ($cdir as $key => $value) {
                    if (!in_array($value, array(".", ".."))) {
                        if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                            $result[$value] = $this->dirToArray($dir . DIRECTORY_SEPARATOR . $value);
                        } else {
                            $result[] = $value;
                        }
                    }
                }
            }
        }
        return $result;
    }

    function rmdir_recursive($dir) {
        foreach (scandir($dir) as $file) {
            if ('.' === $file || '..' === $file)
                continue;
            if (is_dir("$dir/$file")) {
                $this->rmdir_recursive("$dir/$file");
            } else {
                unlink("$dir/$file");
            }
        }
        rmdir($dir);
    }
	
    function createZipFile($path, $targetfilepath) {
		$zip = new \ZipArchive();
		if (!$zip->open($targetfilepath, \ZIPARCHIVE::CREATE)) {
			return false;
		}
		 if (!\Core::isArray($path)) {
            $path = array($path);
        }
        if (\Core::countArray($path) > 0) {
            foreach ($path as $singlefolder) {
			$this->addFiletoZip($singlefolder, $zip);
			}
		}
		$zip->close();
		return true;
        $zip_name = "temfolder.zip";
		global $rootObj;
        $zip = new \ZipArchive();
        if ($zip->open($zip_name, \ZIPARCHIVE::CREATE) !== TRUE) {
            $error .= "* Sorry ZIP creation failed at this time";
        }
        if (!\Core::isArray($path)) {
            $path = array($path);
        }
        if (\Core::countArray($path) > 0) {
            foreach ($path as $singlefolder) {

                $valid_files = $this->dirToArray($singlefolder);
				echo "<pre>";
					print_r($valid_files);
					echo "</pre>";
				$foldername=str_replace($rootObj->documentRoot,"",$singlefolder);
                foreach ($valid_files as $key => $file) {
                    if (is_array($file)) {
                        foreach ($file as $subfile) {
                            $filepath = $singlefolder . "/" . $key . "/" . $subfile;
                            if (file_exists($filepath)) {
                                $zip->addFile($filepath, $foldername . "/" . $key . "/" . $subfile);
                            }
                        }
                    } else {
                        $filepath = $singlefolder . "/" . $file;
                        if (file_exists($filepath)) {
                            $zip->addFile($filepath, $foldername . "/" . $file);
                        }
                    }
                }
				
            }
			die;
            $zip->close();
            rename($zip_name, $targetfilepath . ".zip");
            return true;
        }
    }
	function addFiletoZip($source, $zip)
	{
		global $rootObj;
		$source = str_replace('\\', '/', realpath($source));

		if (is_dir($source) === true)
		{
			$files = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($source), \RecursiveIteratorIterator::SELF_FIRST);

			foreach ($files as $file)
			{
				
				$file = str_replace('\\', '/', $file);
				$file=str_replace($rootObj->documentRoot,"",$file);
				// Ignore "." and ".." folders
				if( in_array(substr($file, strrpos($file, '/')+1), array('.', '..')) )
					continue;

				$file = realpath($file);

				if (is_dir($file) === true)
				{
					$zip->addEmptyDir(str_replace($source . '/', '', $file . '/'));
				}
				else if (is_file($file) === true)
				{
					$zip->addFromString(str_replace($source . '/', '', $file), file_get_contents($file));
				}
			}
		}
		else if (is_file($source) === true)
		{
			$zip->addFromString(basename($source), file_get_contents($source));
		}
		return ;
	}
    public function searchDirectory($directoryPath) {
        $directoryList = [];
        $dirs = array();
        $objects = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(getcwd()), \RecursiveIteratorIterator::SELF_FIRST);
        foreach ($objects as $file) {
            if ($file->isDir()) {
                $item = substr($file->getPathname(), strlen(getcwd()));
                $flag=TRUE;
                $excludesFolders=array("sessiondata","uploads","Var");
                foreach($excludesFolders as $excludesFolder)
                {
                        if(strpos($item,$excludesFolder))
                        {
                                $flag=false;
                                break;
                        }
                }
                if ($flag && $this->endsWith($item, $directoryPath)) {
                    $directoryList[] = $item;
                }
            }
        }
        return $directoryList;
    }

    public function searchFiles($filePath) {
        $fileList = [];
        global $rootObj;
        $dirs = array();
        $objects = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator(getcwd()), \RecursiveIteratorIterator::SELF_FIRST);
        foreach ($objects as $file) {
            if ($file->isFile()) {
                $item = substr($file->getPathname(), strlen(getcwd())); 
		$flag=TRUE;
		$excludesFolders=array("sessiondata","uploads","Var");
		foreach($excludesFolders as $excludesFolder)
		{
			if(strpos($item,$excludesFolder))
			{
				$flag=false;
				break;
			}
		}
		if ($flag && $this->endsWith($item, $filePath)) {
				$fileList[] = $rootObj->documentRoot.ltrim($item,DIRECTORY_SEPARATOR);
			}
            }
        }
        return $fileList;
    }

    public function endsWith($haystack, $needle) {
        $length = strlen($needle);
        if ($length == 0) {
            return true;
        }

        return (substr($haystack, -$length) === $needle);
    }

    public function dirToDirectoryArray($dir) {
        $result = array();
        if (\Core::fileExists($dir)) {
            $cdir = scandir($dir);
            if (\Core::countArray($cdir) > 0) {
                foreach ($cdir as $key => $value) {
                    if (!in_array($value, array(".", ".."))) {
                        if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                            $result[$value] = $this->dirToArray($dir . DIRECTORY_SEPARATOR . $value);
                        } else {
                            //$result[] = $value; 
                        }
                    }
                }
            }
        }
        return $result;
    }

    public function dirToFilesArray($dir,$results=[]) {
        if(file_exists($dir))
        {
            $files = scandir($dir);  
            
            if(\Core::isArray($files) && \Core::countArray($files)>0)
            {        
                foreach ($files as $key => $value) {
                    $path = realpath($dir . DIRECTORY_SEPARATOR . $value); 
                    if (!is_dir($path)) {
                        $results[] = $path;
                    } else if ($value != "." && $value != "..") {                            
                        $results=$this->dirToFilesArray($path, $results);  
                        $results[] = $path;
                    }                        
                }
            }
        }        
        return $results;
   }
}
