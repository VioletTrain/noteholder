/**
 * Сбор POST-данных с полей
 * 
 * @param {type} obj_form   имя/id/class поля
 * @returns {unresolved}
 */
function GetData(obj_form){
    var hData = {};
    $('input, textarea, select, img', obj_form).each(function(){
        if(this.name && this.name!=''){
            hData[this.name] = this.value;
        }
    });

    return hData;
}

AjaxFunc = function(fields, ca, func){
    var postData = GetData(fields);

    $.ajax({
        type:'POST',
        async: true,
        url: ca,
        data: postData,
        dataType: 'json',
        success: function(data){ 
            if(func == 1){
                console.log(data);
            } else {
                func(data);
            }
        }
    });
};

//  отправка POST-данных( имя папки ) для добавления новой папки 
AddNewFolder = function(){
    AjaxFunc(".itemName", "?controller=folder&action=cfolder", 1);
};

DeleteFolder = function(){  
    AjaxFunc(".itemName", "?controller=folder&action=rfolder", 1);
};

AddNewNote = function(){
    AjaxFunc(".itemName", "?controller=note&action=cnote", 1);
};

DeleteNote = function(){    
    AjaxFunc(".itemName", "?controller=note&action=rnote", 1);
};

AddContent = function(){    
    AjaxFunc(".itemName", "?controller=note&action=ccontent", 1);
};

//  отправка POST-данных для выхода из учетной записи
LoggingOut = function(){
    func = function(data){
        console.log("success");
        setTimeout(function(){
                    window.location.href = "/";
		}, 500);
    }
    
    AjaxFunc(true, "?controller=user&action=logout", func);
};

