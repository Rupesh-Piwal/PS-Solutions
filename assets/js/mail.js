function sendMessage() {
  (function () {
    emailjs.init("aS-R_bachadZLi2Mo"); // Account public key
  })();

  var serviceID = "service_w1lencz"; // Email Service ID
  var templateID = "template_0m25xyk"; // Email Template ID

  var params = {
    sendername: document.querySelector("#name").value,
    senderemail: document.querySelector("#email").value,
    subject: document.querySelector("#subject").value,
    message: document.querySelector("#message").value,
  };

  emailjs
    .send(serviceID, templateID, params)
    .then((res) => {
      alert("Thank you, " + params["sendername"] + "! Your message has been sent");
    })
    .catch();
}
