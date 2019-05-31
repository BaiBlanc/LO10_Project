var userId;
var userName;
var userGivenName;
var userFamilyName;
var userEmail;

function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    userId = profile.getId();
    userName = profile.getName();
    userGivenName = profile.getGivenName();
    userFamilyName = profile.getFamilyName();
    userEmail = profile.getEmail();
    console.log(userId);
    initForm();
}

function logOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
    window.location.href = "index.html";
}

function checkLogin(){
    var b=true;
    if(!gapi.auth2.getAuthInstance().isSignedIn.get()){
        alert("Veuillez connecter sur votre compte Google ! ");
        window.location.href = "index.html";
        b=false;
    }
    return b;
}

function initForm() {
    document.getElementById("inputSurname").value = userFamilyName;
    document.getElementById("inputFirstname").value = userGivenName;
    document.getElementById("inputEmail").value = userEmail;
}

function imageAttention() {
    document.getElementById("attention").style.display = "block";
}

function noImageAttention() {
    document.getElementById("attention").style.display = "none";
}

function submitF() {
    if(checkLogin()){
        var form = document.getElementById("firstForm");
    var nom = form.inputSurname.value;
    var prenom = form.inputFirstname.value;
    var role = form.radiorole.value;
    var sexe = form.radiosexe.value;
    var email = form.inputEmail.value;
    var adresse = form.inputAddress.value;
    var tel = form.inputTelephone.value;
    var image = form.inputImage.value;
    
    $.ajax({
        url: "http://18.222.63.99:3000/firstlogin",
        header: "Access-Control-Allow-Origin: *",
        type: "POST",
        data: {
            "userId": userId,
            "nom": nom,
            "prenom": prenom,
            "adresse": adresse,
            "email": email,
            "portable": tel,
            "role": role,
            "sexe": sexe,
            "photo": image
        },
        dataType: "json",
        success: function (data) {
            console.log("Response:" + data);
        }
    });
    alert("Votre profile a bien été remis. Vous pouvez postuler une annonce après votre profile soit validé par notre système. ");
    window.location.href = "user.html";
    }
    
}