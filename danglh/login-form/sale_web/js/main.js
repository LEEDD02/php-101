function extension() {
  document.getElementById('product_list_container').style.height = '100%'
  document.getElementById('extension').style.display = 'none'
}
function check_pwd() {
  let check_pwd
  let new_pwd = document.getElementById('new_pwd')
  let confirm_pwd = document.getElementById('confirm_pwd')
  if (confirm_pwd !=== new_pwd) {
    document.getElementById('pwd_error').innerHTML = 'Confirmed password does not match'
    check_pwd = true
  }
  if (check_pwd) {
    return false
  }
}
