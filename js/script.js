function addToCartJS(productId, productPrice) {
  var postedData = {
    action: 'add',
    id: productId,
    price: productPrice
  }
  $.ajax({
    type: 'POST',
    url: '../functions.php',
    data: postedData,
    dataType: 'json',
    success: function (output) {
      console.log(output);
    }
  });
}

function removeToCartJS(productId, productPrice) {
  $.ajax({
    url: '../functions.php',
    data: {
      action: 'remove',
      id: productId,
      price: productPrice
    },
    type: 'POST',
    dataType: 'json',
    success: function (output) {
      console.log(output);
    }
  });
}

function clearCartJS() {
  $.ajax({
    url: '../functions.php',
    data: {action: 'clear'},
    type: 'POST',
    dataType: 'json',
    success: function (output) {
      console.log(output);
    }
  });
}

function logInJS(email, password) {
    var postedData = {
    action: 'log',
    email: email.value,
    pwd: password.value
  }
  $.ajax({
    url: '../functions.php',
    data: postedData,
    type: 'POST',
    dataType: 'json',
    success: function (output) {
      console.log(output);
    }
  });
}

function signInJS(email, password) {
    var postedData = {
    action: 'sign',
    email: email.value,
    pwd: password.value
  }
  $.ajax({
    url: '../functions.php',
    data: postedData,
    type: 'POST',
    dataType: 'json',
    success: function (output) {
      console.log(output);
    }
  });
}