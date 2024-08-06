function checking() {
  let password = document.getElementById('password')
  let confirm_password = document.getElementById('confirm_password')
  if (password.value === confirm_password.value) {
    return true
  } else {
    alert('Your confirmed password dose not match')
    return false
  }
}
