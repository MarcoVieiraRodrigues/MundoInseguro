$(document).ready(function () {
  $('.btn_close').click(function () {
    $('.menu').hide()
    $('.alternative').show()
  })

  $('.btn_menu').click(function () {
    $('.menu').show()
    $('.alternative').hide()
  })
})


