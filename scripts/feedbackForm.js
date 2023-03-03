//feedbackFormValidate.js
//Functions to perform data validation on data entered by
//the user into the feedback form, and to display appropriate
//error messages if problems with the data are discovered

function feedbackFormValidate()
{
    console.log("feedbackFormValidate() called");
    var contactFormObj = document.getElementById("feedbackForm");
    var feedback = contactFormObj.feedback.value;
    var rating = contactFormObj.rating.value;
    var email = contactFormObj.email.value;
    var everythingOK = true;
    
    if (!validateEmail(email))
    {
        alert("Error: Invalid e-mail address.");
        everythingOK = false;
    }
    
    if (everythingOK)
    {
        alert("All the information looks good.\nYou replied with " + countText(feedback) + " words!\nYou gave the website a rating of " + rating + "!\nThank you!");
        return true;
    }
    else
        return false;
}

function countText(name)
{
    var p = name.split(" ");
    return p.length;
}

function validateEmail(address)
{
    var p = address.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
    if (p == 0)
        return true;
    else
        return false;
}

