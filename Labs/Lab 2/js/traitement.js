function username()
{
    if (valideUser(document.getElementById("user").value)===false)
    {
        document.getElementById("user").style.backgroundColor="red";
    }
    else
    {
        document.getElementById("user").style.backgroundColor="green";
    }
}

function password()
{
    if (validePassword(document.getElementById("password").value)===true)
    {
        document.getElementById("password").style.backgroundColor="red";
    }
    else
    {
        document.getElementById("password").style.backgroundColor="green";
    }
}

function valideUser(chaine)
{
    return /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/.test(chaine);
}

function validePassword(chaine)
{
    return /^$/.test(chaine);
}