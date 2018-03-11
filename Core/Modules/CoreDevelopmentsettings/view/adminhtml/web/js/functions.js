window.hosturl= "";
jQuery(document).ready(function () 
{
	window.hosturl=jQuery("#sitehostadmin").val();
function ajaxindicatorstart(text)
{
	if(jQuery('body').find('#resultLoading').attr('id') != 'resultLoading'){
	jQuery('body').append('<div id="resultLoading" style="display:none"><div><img src="'+jQuery("#sitehost").val()+'/img/gears.gif"><div>'+text+'</div></div><div class="bg"></div></div>');
	}

	jQuery('#resultLoading').css({
		'width':'100%',
		'height':'100%',
		'position':'fixed',
		'z-index':'10000000',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto'
	});

	jQuery('#resultLoading .bg').css({
		'background':'#000000',
		'opacity':'0.7',
		'width':'100%',
		'height':'100%',
		'position':'absolute',
		'top':'0'
	});

	jQuery('#resultLoading>div:first').css({
		'width': '250px',
		'height':'75px',
		'text-align': 'center',
		'position': 'fixed',
		'top':'0',
		'left':'0',
		'right':'0',
		'bottom':'0',
		'margin':'auto',
		'font-size':'16px',
		'z-index':'10',
		'color':'#ffffff'

	});

    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeIn(300);
    jQuery('body').css('cursor', 'wait');
}
function ajaxindicatorstop()
{
    jQuery('#resultLoading .bg').height('100%');
       jQuery('#resultLoading').fadeOut(300);
    jQuery('body').css('cursor', 'default');
}
jQuery(document).ajaxStart(function () {
 		//show ajax indicator
ajaxindicatorstart('Loading data.. please wait..');
}).ajaxStop(function () {
//hide ajax indicator
ajaxindicatorstop();
});
    
    if(document.getElementById('childdatadisplay'))
    {
		var childdatadisplay=document.getElementById('childdatadisplay').value;
        samplefun(childdatadisplay);
    }
    calldefaultfunctions();
});
var ram=0;
function displayPopupAlert(message)
{
    alert(message);
}
function calldefaultfunctions()
{
	
	var action=null;
	if(document.getElementById('module'))
	var module=document.getElementById('module').value;
	if(document.getElementById('node'))
	var node=document.getElementById('node').value;
	if(document.getElementById('action_id'))
	var action=document.getElementById('action_id').value;	
	if(action!="admin" && action!=null)
	{
		var defaultonchange=null;
		if(document.getElementById('noderelations'))
		{
			var noderelations=document.getElementById('noderelations').value;			
			if(noderelations!="")
			{
                            var noderelations=jQuery.parseJSON(noderelations);	
                            jQuery.each(noderelations,function(colname,destinationnode)
                            {                                
                                defaultphpfile(node,action,destinationnode,colname);                                
                                
                            });
			}
		}
                if(node=='core_node_settings')
                {
                    getNodeStructure();
                }
        }
}


function defaultphpfile(node,action,destinationNode,replacediv)
{
    
	//jQuery("#div_loading").show();
	var casevalue;
	if (jQuery("#"+node))
	{
		casevalue=1;
	}
	else
	{
		casevalue=2;
	}	
        
	if (casevalue=='1')
	{
		var formdata = jQuery(".form_"+node).serialize();
		
	}
	else
	{
		var formdata = jQuery("form#result_"+node).serialize();
		
	}
	
	var posturl=window.hosturl+destinationNode+"/descriptor";
        
       jQuery.ajax({
		url : posturl,
		type : "POST",
		dataType : "html",
		data : formdata+"&destinationNode="+destinationNode+"&action_id"+action+"&defaultfile=1"+"&idname="+replacediv,
		success : function (html)
		{
                    
			jQuery("#div_loading").hide();
			if(html)
			{
				var ivid="#value_"+replacediv;
				jQuery(ivid).html(html);								
				return true;
			}
		}
	});
}

function hidevalues()
{
	var is_module=jQuery("#is_module").is(":checked");
	if(is_module==true)
	{
		document.getElementById("row_module_id").style.display = "none";
		document.getElementById("row_module_display").style.display = "none";
		
	}
	else
	{
		document.getElementById("row_module_id").style.display = "";
		document.getElementById("row_module_display").style.display = "";
	}	
}
function getformsubmit(actionflag)
{
	jQuery("#actionflag").val(actionflag);
	
        jQuery(".formsubmit").prop( "disabled", true);
        if(node==undefined)
	var node=document.getElementById("node").value;
        if(action==undefined)
	var action=document.getElementById("action").value;	
	if(jQuery("#accesssave").val()!=undefined)
	{
		node="core_access";
		action="save";
	}
	var postUrl=window.hosturl+node+"/"+action;
	var x=confirm("Do You Want to Submit");
        var count=0;
	if(x==true)
	{		
                jQuery(".formsubmit").prop( "disabled", false);
		jQuery("form#"+node).click(function(event){
                    var target = event.toElement || event.relatedTarget || event.target || function () { throw "Failed to attach an event target!"; }                    
                    if(jQuery("#"+target.id).hasClass("formsubmit"))
                    {
                        count=count+1;
                        if(count==1)
                        {
                        
                            jQuery(".error_message").html("");
                            var formData = new FormData(jQuery("form#"+node)[0]);		
                            event.preventDefault();
                            jQuery(".formsubmit").prop( "disabled", true);

                            jQuery.ajax({
                                    url : postUrl,
                                    type: 'POST',
                                    data: formData,
                                    async: false,
                                    cache: false,
                                    contentType: false,
                                    processData: false,
                                    success: function (responseData)
                                    {   
                                        jQuery(".formsubmit").prop( "disabled", false);

                                            try
                                            {
                                                jQuery("#error_div").html("");
                                                var obj = jQuery.parseJSON(responseData)
                                                if(obj.status=="success")
                                                {

                                                    window.location.replace(obj.redirecturl);
                                                }
                                                else if(obj.status=="error")
                                                {
                                                    jQuery("#error_div").html('');
                                                    var errorsArray=obj.errors;
                                                    jQuery.each(errorsArray, function(key, errorMessage) 
                                                    {
                                                        try
                                                        {
                                                            var idname="#error_"+key;                                                    
                                                            jQuery(idname).html(errorMessage);                                                        
                                                        }
                                                        catch(e)
                                                        {
                                                            console.log(e);

                                                        }
                                                    });                                                
                                                }
                                                else
                                                {
                                                    jQuery(".formsubmit").prop( "disabled", false);
                                                    jQuery("#error_div").html(responseData);
                                                    return false;
                                                }
                                                return true;
                                            }
                                            catch(e)
                                            {
                                                jQuery(".formsubmit").prop( "disabled", false);
                                                jQuery("#error_div").html(responseData);
                                                return false;
                                            }

                                    }
                            });
                        }
                    }
                    else
                    {
                        console.log(event.toElement.className);
                    }
		
		});
	}
	else
	{
            jQuery(".formsubmit").prop( "disabled", false);
		jQuery('#validate_value').val("0");
		jQuery("#error_div").html("");
		jQuery( "#saveandclose").prop( "disabled", false);
		return false;
	}
}
function removedisable()
{
	jQuery('#validate_value').val("0");
	jQuery("#error_div").html("");
	jQuery( "#saveandclose").prop( "disabled", false);
	jQuery("#refreshsaveandclose").hide();
	return true;
}
function samplefun(node)
{
    
	jQuery('#multiedit_'+node).val("0");
	jQuery('#mrahtml_'+node).val("");
	updateresultdiv("cancel",node);
	return true;
}
function updateresultdiv(action,node)
{
	if(action=="cancel")
	{
		jQuery('#'+node+'_multiedit').val("0");
	}
	else
	{
		jQuery('#'+node+'_multiedit').val("1");	
	}
        var formname="form#result_"+node;
        
	var formdata = jQuery(formname).serialize();	
        var POSTURL=window.hosturl+node+"/adminRefresh";
        jQuery.ajax({
			url : POSTURL,
			type : "POST",
			dataType : "html",
			data:formdata+"&resultchange=1"+"&gridsearch=search",
			success : function (html)
			{
                                var idname="#total_"+node;
                                jQuery(idname).html(html);
				//jQuery("#div_loading").hide();
				return true;
					
			}
			
	});
	
	return true;
}
function multieditformsubmit(node)
{
	
	var formname="form#result_"+node;       
	var formdata = jQuery(formname).serialize();	        
        var postUrl=window.hosturl+node+"/multiEditSave";
        console.log(postUrl);
	jQuery.ajax({
			url : postUrl,
			type : "POST",
			dataType : "html",
			data:formdata,
			success : function (responseData)
			{
                            try
                            {
                                jQuery(".error_message").html("");
                                var obj = jQuery.parseJSON(responseData)
                                if(obj.status=="success")
                                {
                                    window.location.replace(obj.redirecturl);
                                }
                                else
                                {
                                    try
                                    {
                                        var errorsArray=obj.errors;
                                        jQuery.each(errorsArray, function(key, errorMessage) 
                                        {
                                            try
                                            {
                                                var idname="#"+key;   
                                                jQuery(idname).html(errorMessage);                                                        
                                            }
                                            catch(e)
                                            {
                                                console.log(e);

                                            }
                                        });
                                    }
                                    catch(e)
                                    {
                                        jQuery("#"+node+"_error_div").html(responseData);
                                    }
                                }
                            }
                            catch(err)
                            {
                                jQuery("#"+node+"_error_div").html(responseData);
                                console.log(err);
                            }                            		
			}
			
	});	
	return true;
	
}
function getPrimarykey()
{
    var destinationNode=jQuery("#node").val();
    var formData = jQuery("form").serialize();
    var posturl=window.hosturl+destinationNode+"/getPrimaryKey";
        
    jQuery.ajax({
            url : posturl,
            type : "POST",
            dataType : "html",
            data : formData+"&idname=tablename",
            success : function (html)
            {                
               html=html.replace(" ","");
               jQuery("#primkey").val(html);

            }
     });
    
}
function getAutokey()
{
    var destinationNode=jQuery("#node").val();
    var formData = jQuery("form").serialize();
    var posturl=window.hosturl+destinationNode+"/getAutokey";
        
    jQuery.ajax({
            url : posturl,
            type : "POST",
            dataType : "html",
            data : formData,
            success : function (html)
            {               
                html=jQuery.trim(html);
               jQuery("#autokey").val(html);
               jQuery("#autokey").next("span").html(html);

            }
     });
    
}
function getNodeStructure()
{
    
    var destinationNode=jQuery("#node").val();
    var formData = jQuery("form").serialize();
    var posturl=window.hosturl+destinationNode+"/getNodeStructureDetails";
    var columnarray=new Array("mandotatory_add","mandotatory_edit","uniquefields","hide_add","hide_edit","hide_view","hide_admin","readonly_add","readonly_edit","search","boolattributes","file","fck","checkbox","selectbox","multivalues","exactsearch","editlist","numberattribute","total","colorattributes");
    for(var j=0;j<columnarray.length;j++)
    {
            var columnname=columnarray[j];
            getNodeStructureFields(columnname);
    }
    
}
function getNodeStructureFields(columnname)
{
    var destinationNode=jQuery("#node").val();
    var formData = jQuery("form").serialize();
    var posturl=window.hosturl+destinationNode+"/getNodeStructureDetails";
    
        jQuery.ajax({
        url : posturl,
        type : "POST",
        dataType : "html",
        data : formData+"&idname="+columnname,
        success : function (html)
        {                
           var ivid="#value_"+columnname;
           jQuery(ivid).html(html);

        }
    });
   
    
}
function setpagezero(node)
{
	jQuery('#page_'+node).val(1);
}
function setpage(node,pagevalue)
{
	jQuery('#page_'+node).val(pagevalue);
}
function setrpp(node,rppvalue)
{	
	jQuery('#rpp_'+node).val(rppvalue);
	jQuery('#page_'+node).val(1);
}
function formvalidations(value,colname,type)
{
	if(type=="EMD")
	{
		validateEmail(value,colname);
	}
	if(type=="PHN")
	{
		validatePhone(value,colname);
	}
}
function checkdateformate(colname,value)
{
	var pattern =/^([0-9]{4})-([0-9]{2})-([0-9]{2})jQuery/;
	if(value!="")
	{
		if (!pattern.test(value))
		{
			var idname="#"+colname
			jQuery(idname).val("");
		}
	}
	
}
function validateEmail(sEmail,colname)
{
    var idname="#"+colname;
    var statusidname="#status_"+colname;
    var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)jQuery/;
    if (filter.test(sEmail))
    {	jQuery(idname).css('color', 'green');
        return true;
    }
    else
    {	
	jQuery(idname).val("");
        return false;
    }
}
function validatePhone(value,colname)
{
	var filter = /^[0-9-+]+jQuery/;
	if (filter.test(value))
	{
		jQuery(idname).css('color', 'green');
		return true;
	}
	else
	{
		var idname="#"+colname;
		jQuery(idname).val("");
		return false;
	}
}
function rameshajaxfunction(fileurl,formdata,replacediv,type)
{
	if(type == undefined) 
	{
		type="html";
	}
	else
	{
		type="value";
	}
	jQuery.ajax({
		
		url:fileurl,
		dataType:"html",
		data:formdata,
		type:"POST",
		success : function (html)
		{
			if(type == 'html') 
			{
				jQuery("#"+replacediv).html(html);
			}
			else
			{
				jQuery("#"+replacediv).value(html);
			}
		}
		
	});	
   //do this
	return true;
}
function checkaction(nodename,value,type)
{
	
	if(type == undefined) 
	{
		var namevaluearray=document.getElementsByName(nodename+"[]");
	}
	else
	{
		var namevaluearray=document.getElementsByClassName(nodename);
	}
	
	for(var i=0;i<namevaluearray.length;i++)
	{
		var idvalue=namevaluearray[i].id;
                jQuery("#"+idvalue).attr('checked',value);
		jQuery("#"+idvalue).css("opacity","1");
	}
	return true;
}
function getmraaction(currentElement)
{   
	var nodeName=jQuery(currentElement).attr("currentnode");
	
    var actionName=jQuery("#"+nodeName+"_mraAction").val();
    var selectorValues="";
    if(actionName)
    {
        var selected=0;
        var namevaluearray=document.getElementsByName("mra_"+nodeName+"[]");
        for(var i=0;i<namevaluearray.length;i++)
        {
            var idvalue=namevaluearray[i].id;            
            if(namevaluearray[i].checked)
            {
                selected=1;   
                if(selectorValues!="")
                {
                    selectorValues=selectorValues+"|";
                }
                selectorValues=selectorValues+jQuery("#"+idvalue).val();
            }
        }
        if(selected==0)
        {
            jQuery("#"+nodeName+"_selector").val("");
            alert("Please Select Records");
            return false;
        }    
        else
        {          
            var x=confirm("Due Want to Submit");
            if(x==true)
            {
                jQuery("#"+nodeName+"_selector").val(selectorValues);
                var parentAction=jQuery("#"+nodeName+"_parentaction").val();
                var parentNode=jQuery("#"+nodeName+"_parentnode").val();
                var parentSelector=jQuery("#"+nodeName+"_parentidvalue").val();
                var postUrl=window.hosturl+nodeName+"/"+"mra"+actionName;
                if(parentNode)
                {
                    postUrl=postUrl+"/0/"+parentNode+"/"+parentAction+"/"+parentSelector;
                }                
                var formData =jQuery("#mradata_"+nodeName).serialize(); 
                jQuery.ajax({
                            url : postUrl,
                            type: 'POST',
                            data: formData,				
                            success: function (responseData)
                            {   
                                jQuery("#mraerror_"+nodeName).html(responseData);
                                try
                                {
                                    var obj = jQuery.parseJSON(responseData)
                                    if(obj.status=="success")
                                    {
                                        window.location.replace(obj.redirecturl);
                                    }
                                    else if(obj.status=="error")
                                    {
                                        jQuery("#mraerror_"+nodeName).html(responseData.errors);
                                        return false;
                                    }
                                    else
                                    {

                                        jQuery("#mraerror_"+nodeName).html(responseData);
                                        return false;
                                    }
                                    return true;
                                }
                                catch(e)
                                {
                                    jQuery("#mraerror_"+nodeName).html(responseData);
                                    return false;
                                }                                       
                            }
                    });
            }            
        }
    }
    else
    {
        alert("Please Select Action ");
        return false;
    }
    
}
function getMRATemplate(nodeName)
{   
    var formData=jQuery("form#mradata_"+nodeName).serialize();
  
    var posturl=window.hosturl+nodeName+"/getMRATemplate";
     
    jQuery.ajax({
            url : posturl,
            type : "POST",
            dataType : "html",
            data : formData+"&id=mra",
            success : function (responseData)
            {   
               jQuery("#mrahtml_"+nodeName).html(responseData);

            }
     });
}
function getFieldsForUniqueFieldset()
{
    var node=jQuery("#node").val();    
    var formData=jQuery("form#"+node).serialize();
  
    var posturl=window.hosturl+node+"/getStructure";
     
    jQuery.ajax({
            url : posturl,
            type : "POST",
            dataType : "html",
            data : formData+"&idname=uniquefieldset",
            success : function (responseData)
            {   
               jQuery("#value_uniquefieldset").html(responseData);

            }
     });
}
function getFieldsForFormSettings()
{
    var node=jQuery("#node").val();    
    var formData=jQuery("form#"+node).serialize();
  
    var posturl=window.hosturl+node+"/getStructure";
     
    jQuery.ajax({
            url : posturl,
            type : "POST",
            dataType : "html",
            data : formData+"&idname=filedname",
            success : function (responseData)
            {   
               jQuery("#value_filedname").html(responseData);

            }
     });
}
function getFieldsForRelationDependee()
{
    var node=jQuery("#node").val();    
    var formData=jQuery("form#"+node).serialize();
  
    var posturl=window.hosturl+node+"/getStructure";
     
    jQuery.ajax({
            url : posturl,
            type : "POST",
            dataType : "html",
            data : formData+"&idname=dependee_fields",
            success : function (responseData)
            {   
               jQuery("#value_dependee_fields").html(responseData);

            }
     });
}
function getFieldsForDefualtFields()
{
    var node=jQuery("#node").val();    
    var formData=jQuery("form#"+node).serialize();
  
    var posturl=window.hosturl+node+"/getStructure";
     
    jQuery.ajax({
            url : posturl,
            type : "POST",
            dataType : "html",
            data : formData+"&idname=fieldname",
            success : function (responseData)
            {   
               jQuery("#value_fieldname").html(responseData);

            }
     });
}
function getFieldsForAttributeFields()
{
    var node=jQuery("#node").val();    
    var formData=jQuery("form#"+node).serialize();
  
    var posturl=window.hosturl+node+"/getStructure";
     
    jQuery.ajax({
            url : posturl,
            type : "POST",
            dataType : "html",
            data : formData+"&idname=fieldname",
            success : function (responseData)
            {   
               jQuery("#value_fieldname").html(responseData);

            }
     });
}
function getFieldsForNodeFiletypes()
{
    var node=jQuery("#node").val();    
    var formData=jQuery("form#"+node).serialize();
  
    var posturl=window.hosturl+node+"/getStructure";
     
    jQuery.ajax({
            url : posturl,
            type : "POST",
            dataType : "html",
            data : formData+"&idname=colmanname",
            success : function (responseData)
            {   
               jQuery("#value_colmanname").html(responseData);

            }
     });
}
function getFieldsforReport()
{
    var node=jQuery("#node").val();    
    var formData=jQuery("form#"+node).serialize();
  
    var posturl=window.hosturl+node+"/getStructure";
     
    jQuery.ajax({
            url : posturl,
            type : "POST",
            dataType : "html",
            data : formData+"&idname=fieldsdata",
            success : function (responseData)
            {   
               jQuery("#value_fieldsdata").html(responseData);

            }
     });
}
function getreportfilter(reportname)
{	
	if(reportname!="")
	{
             var posturl=window.hosturl+'core_reportsengine'+"/filter";
             console.log(posturl);
		jQuery.ajax({
			
			url:posturl,
			type:"POST",
			data:"&reportname="+reportname,
			dataType:"html",
			success : function (output)
			{
                 console.log(output);
				jQuery("#filterdiv").html(output);
				jQuery("#buttons_div").show();
				jQuery("#report_submit").attr("disabled", false);
				jQuery("#report_submitrefresh").hide();
				jQuery("#div_loading").hide();
				jQuery("#reportoutput_div").html("");
				jQuery("#page").val(1);
			}
			
			});
		
	}
	else
	{
		jQuery("#filterdiv").html("");
		jQuery("#reportoutput_div").html("");
		jQuery("#buttons_div").hide();
		jQuery("#div_loading").hide();
		jQuery("#page").val(1);
	}
	return true;
}
function reportdatasubmit()
{
	var formdata=jQuery("form").serialize();
	var outputtype=document.getElementById("output_type").value;
	if(outputtype=="csv" || outputtype=='pdf')
	{
		var url1=window.hosturl+'core_reportsengine'+"/export?"+formdata;
		window.open(url1);
	}
	else
	{
            var posturl=window.hosturl+'core_reportsengine'+"/getReportDetails";
		jQuery("#report_submit").attr("disabled", true);
		jQuery("#report_submitrefresh").show();		
		jQuery.ajax({
				
			url:posturl,
			type:"POST",
			data:formdata,
			dataType:"html",
			success : function (output)
			{
				jQuery("#reportoutput_div").html(output);
				jQuery("#report_submit").attr("disabled", false);
			}
				
		});
	}
	
	return false;
	
}
function setpageforreport(page)
{
	jQuery("#page").val(page);
	reportdatasubmit();
}
jQuery(function () {
    var jcrop_api,
        boundx,
        boundy;
    jQuery(".fileupload").change(function () {
        
        var fileElementId=jQuery(this).attr("id");
        window.imageelement=fileElementId;
        jQuery("#image_preview_"+fileElementId).html("");
        var x = document.getElementById(fileElementId);
        var txt = "";
        if ('files' in x) {
            if (x.files.length == 0) {
                txt = "Select one or more files.";
            } 
            else
            {
                jQuery("#image_preview_"+fileElementId).show();
                for (var i = 0, f; f = x.files[i]; i++) {

                    // Only process image files.
                    if (!f.type.match('image.*')) {
                        continue;
                    }

                    var reader = new FileReader();

                    // Closure to capture the file information.
                    reader.onload = (function (theFile) {
                        return function (e) {
                            // Render thumbnail.
                            var img = new Image;
        
        img.onload = function() { 
//I loaded the image and have complete control over all attributes, like width and src, which is the purpose of filereader.
            jQuery.ajax({url: img.src, async: false, success: function(result){
                     var imageInfo = theFile.name    +' '+ // get the value of `name` from the `file` Obj
                      img.width  +'×'+ // But get the width from our `image`
                      img.height +' '+
                      theFile.type    +' '+
                      Math.round(theFile.size/1024) +'KB';
                        console.log(imageInfo);
            		jQuery("#image_preview_"+fileElementId).append("<div style='min-width:1500px;min-height:"+img.height+"px;overflow:auto;'><img id='ramesh' src='" + img.src + "' /></div>");
                console.log("Finished reading Image");               
        		}});
        };
        
        img.src = reader.result;
                            console.log(e);
                            
                            var span = document.createElement('span');
                            span.innerHTML = ['<div style="overflow:auto;" ><img id="ramesh" style="width:100% !importtant;height:100% !importtant;" src="'+e.target.result+
                                '" title="'+escape(theFile.name)+'"/><div>'].join('');
                            
                            //jQuery("#image_preview_"+fileElementId).append(span);                            
                            
                        };
                    })(f);

                    // Read in the image file as a data URL.
                    reader.readAsDataURL(f);
                }               
            }
        }         
        })
    });
    function showCoords(c)
    {        
        jQuery('#'+window.imageelement+'_x1').val(c.x);
        jQuery('#'+window.imageelement+'_y1').val(c.y);       
        jQuery('#'+window.imageelement+'_x2').val(c.x2);
        jQuery('#'+window.imageelement+'_y2').val(c.y2);
        jQuery('#'+window.imageelement+'_w').val(c.w);
        jQuery('#'+window.imageelement+'_h').val(c.h);
        
    }      

jQuery(".span.pull-right").click(function () {
        var top = 0;        
        jQuery("body,html").animate({scrollTop: top}, 800);
    });
    