//of header javascript
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function (event) {
    if (!event.target.matches(".dropbtn")) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains("show")) {
                openDropdown.classList.remove("show");
            }
        }
    }
} 

// signup javasscript
function func() {
    let email = document.register.email.value;
    let password = document.register.password.value;
    let cpassword = document.register.cpassword.value;
    if (email == "") {
        alert("please enter email");
        return false;
    }
    if (password == "") {
        alert("please enter password");
        return false;
    }
    if (cpassword == "") {
        alert("please enter your confirm password");
        return false;
    } else {
        // alert("Form have submitted succesfully so go to the login page for login");
        return ture;
    }
}

// login javascript
function func1() {
    let email = document.register.email.value;
    let password = document.register.password.value;
    if (email == "") {
        alert("Enter your user email");
        return false;
    }
    if (password == "") {
        alert("Enter your password");
        return false;
    }
    else {
        return ture;
    }
}

//threadlist form javascript
function func3() {
    let title = document.register.title.value;
    let desc = document.register.desc.value;
    if (title == "") {
        alert("Enter your title");
        return false;
    }
    if (desc == "") {
        alert("Please ellaborate your problem");
        return false;
    }
    else {
        return ture;
    }
}

//thread form javascript
function func4() {
    let comment = document.register.comment.value;
    if (comment == "") {
        alert("Enter your comment");
        return false;
    }
    else {
        return ture;
    }
}
