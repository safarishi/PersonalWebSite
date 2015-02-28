/**
 * Created by sshfl on 2014/12/11.
 */

function checkRegister()
{
    String.prototype.trim = function()
    {
        return this.replace(/(^\s*) | (\s*$)/g, '');
    };

    var username = register.username.value;
    var password = register.password.value;
    var password2 = register.password2.value;
    var nickname = register.nickname.value;

    if(username.trim() == ""){
        alert("请输入用户名：");
        register.username.select();
        return false;
    }else{
        var regex = /^[a-zA-Z]{3,8}$/;
        var objRex = new RegExp(regex);
        if(!objRex.test(username))
        {
            alert("用户名必须是3-8为字母:");
            register.username.select();
            return false;
        }
    }

    if(password.trim() == ""){
        alert("请输入密码：");
        register.password.select();
        return false;
    }else{
        var regex = /^[a-zA-Z0-9]{6,18}$/;
        var objRex = new RegExp(regex);
        if(!objRex.test(password))
        {
            alert("密码要是6-18为数字与字母的组合:");
            register.password.select();
            return false;
        }
    }
    //校验确认密码
    if(password2.trim() == ""){
        alert("请输入确认密码：");
        register.password2.select();
        return false;
    }else{
        //确认密码不为空
        if(password2 != password){
            alert("两次密码不一致，请重新输入：");
            register.password2.select();
            return false;
        }
    }
    //校验昵称，不可为空，且必须全位汉字
    if(nickname.trim() == ""){
        alert("请输入昵称：");
        register.nickname.select();
        return false;
    }else{
        //不为空时，要全为汉字
        var regex = /^[\u4e00-\u9fa5]+$/;
        var objRex = new RegExp(regex);
        if(!objRex.test(nickname))
        {
            alert("昵称需全为汉字，请重新输入:");
            register.nickname.select();
            return false;
        }
    }


}
