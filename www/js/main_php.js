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

//  отправка POST-данных( имя папки ) для добавления новой папки 
AddNewFolder = function(){
    var postData = GetData('.new_folder');

    $.ajax({
        type:'POST',
        async: true,
        url:"?controller=folder&action=cfolder",
        data: postData,
        dataType: 'json',
        success: function(data){             
            if(data['success']){
                console.log('success adding new folder');
            } else {
                console.log('failed adding new folder');
                console.log(data['name']);
            }
        }
 
    });
}

function DeleteFolder(){
    var postData = GetData('.new_folder');
    console.log(postData);
    $.ajax({
        type:'POST',
        async: true,
        url:"?controller=folder&action=rfolder",
        data: postData,
        dataType: 'json',
        success: function(data){             
            if(data['success']){
                console.log('success deleting folder');
            } else {
                console.log('failed deleting folder');
            }
        }
 
    });
}
//  отправка POST-данных для выхода из учетной записи
LoggingOut = function(){
    var postData = true;
    
    $.ajax({
        type:'POST',
        async: true,
        url:"?controller=user&action=logout",
        data: postData,
        dataType: 'json',
        success: function(data){             
        	setTimeout(function(){
                    window.location.href = "/";
		}, 500);
        }
 
    });
}
