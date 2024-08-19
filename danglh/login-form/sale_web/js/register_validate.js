function check_form() {
  let check_form = true
  let fullname = document.getElementById('fullname').value
  if (fullname.length === 0) {
    document.getElementById('fullname_error').innerHTML = 'Invalid Fullname'
    check_form = true
  } else {
    let regex_fullname =
      /^[AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+ [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]+(?: [AÀẢÃÁẠĂẰẲẴẮẶÂẦẨẪẤẬBCDĐEÈẺẼÉẸÊỀỂỄẾỆFGHIÌỈĨÍỊJKLMNOÒỎÕÓỌÔỒỔỖỐỘƠỜỞỠỚỢPQRSTUÙỦŨÚỤƯỪỬỮỨỰVWXYỲỶỸÝỴZ][aàảãáạăằẳẵắặâầẩẫấậbcdđeèẻẽéẹêềểễếệfghiìỉĩíịjklmnoòỏõóọôồổỗốộơờởỡớợpqrstuùủũúụưừửữứựvwxyỳỷỹýỵz]*)*/
    if (!regex_fullname.test(fullname)) {
      document.getElementById('fullname_error').innerHTML = 'Invalid Fullname'
      check_form = true
    }
  }
  let username = document.getElementById('username').value
  if (username.length === 0) {
    document.getElementById('username_error').innerHTML = 'Invalid Username'
    check_form = true
  } else {
    let regex_username = /^[a-z0-9_-]{3,16}$/
    if (!regex_username.test(username)) {
      document.getElementById('username_error').innerHTML = 'Invalid Username'
      check_form = true
    }
  }
  let password = document.getElementById('password').value
  if (password.length === 0) {
    document.getElementById('password_error').innerHTML = 'Invalid Password'
    check_form = true
  } else {
    let regex_password = /^[a-z0-9_-]{3,16}$/
    if (!regex_password.test(password)) {
      document.getElementById('password_error').innerHTML = 'Invalid Password'
      check_form = true
    }
  }
  let confirm_password = document.getElementById('confirm_password').value
  if (confirm_password.length === 0) {
    document.getElementById('confirm_password_error').innerHTML = 'Invalid Confirmed Password'
    check_form = true
  }
  if (confirm_password === password) {
  } else {
    document.getElementById('confirm_password_error').innerHTML =
      'Confirmed password does not match'
    check_form = true
  }
  let date = document.getElementById('date').value
  if (date.length === 0) {
    document.getElementById('date_error').innerHTML = 'Invalid Date'
    check_form = true
  }

  let email = document.getElementById('email').value
  if (email.length === 0) {
    document.getElementById('email_error').innerHTML = 'Invalid Email'
    check_form = true
  }

  if (check_form) {
    return false
  }
}
