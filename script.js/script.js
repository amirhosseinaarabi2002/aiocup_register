let $ = document
const registerbtn = $.getElementById("submit")
const userNumberInput = $.getElementById("phone-number")
const toggleMenu1 = $.querySelector(".menu1")
const toggleMenu2 = $.querySelector(".menu2")

registerbtn.addEventListener("click", () => {

    let userNumberInputvalue = userNumberInput.value

    if(isNaN(userNumberInputvalue) || userNumberInputvalue.length < 11 || userNumberInputvalue.length > 11 || userNumberInputvalue.substring(0, 2) != '09') {
        swal({
            title: 'شماره خود را درست وارد کنید!',
            text: 'لطفا مطابق نمونه شماره بگزارید',
            icon: 'error',
            button: 'اوکی',
            timer: 3000
        })
    }else{
        swal({
            title: 'شماره با موفقیت ثبت شد!',
            text: 'منتظر تماس ما باشید',
            icon: 'success',
            button: 'اوکی',
            timer: 3000
        })
    }
})

toggleMenu1.addEventListener('click', function(){
    let menu = $.querySelector('.submenu1')
    if(menu.style.display == 'block'){
        menu.style.display = 'none'
    }else{
        menu.style.display = 'block'
    }
})
toggleMenu2.addEventListener('click', function(){
    let menu = $.querySelector('.submenu2')
    if(menu.style.display == 'block'){
        menu.style.display = 'none'
    }else{
        menu.style.display = 'block'
    }
})