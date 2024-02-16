$(window).on('load', function() {
    window.addEventListener('scroll', ()=> {
        let scrollDistance = window.scrollY;

        if (scrollDistance <= 0) {
            document.querySelector('body').classList.remove('body-scroll')
        }
        if (scrollDistance > 0) {
            document.querySelector('body').classList.add('body-scroll')
        }
    });
    
    if (window.innerWidth > 1199) {
        gsap.registerPlugin(ScrollTrigger, ScrollSmoother)
        if(ScrollTrigger.isTouch !==1) {
            ScrollSmoother.create({
                wrapper: '.wrapper',
                content: '.content',
                smooth: 1.3,
                effects: true
            })
        }
        if ($(window).height() > 1000) {
        var animHeight = 60;
        var animHeightF = 100;
        } else if ($(window).height() > 700 && $(window).height() < 1000) {
            var animHeight = 90;
            var animHeightF = 70;
        } else if ($(window).height() <= 700) {
            var animHeight = 0;
            var animHeightF = 0;
        }
        var wow = ScrollTrigger.batch(".inbox", {
            interval: .1,
            batchMax: 6,
            onEnter: batch=>gsap.to(batch, {
                delay: .1,
                autoAlpha: 1,
                y: 0,
                x: 0,
                duration: 1.5,
                stagger: .2,
                ease: 'power3.out',
                // addClass: "active",
                // toggleClass: "active_-------________---"
            }),
            onEnterBack: batch=>gsap.to(batch, {
                delay: .1,
                autoAlpha: 1,
                y: 0,
                x: 0,
                duration: 1.5,
                stagger: .2,
                ease: 'power3.out',
            }),
            toggleClass: "active",
            start: 'top bottom-=' + animHeight,
        });

        
    }

    
//    Форма обратной связи

    const form = document.getElementById('form');
    if (form) {
        form.addEventListener('submit', formSend);
    }

    async function formSend(e) {
        e.preventDefault();

        let error = formValidate(form);

        // let formData = new FormData(form);

        let data = {
            name: document.getElementById('name').value,
            email: document.getElementById('email').value,
            message: document.getElementById('message').value,
        }


        if (error === 0) {
            let response = await fetch('wp-content/themes/HormonalThinking__Theme/sendmail.php',{
                method: 'POST',
                body: JSON.stringify(data),
                headers: {
                    "Content-Type": "application/json; charset=UTF-8"
                }
            });
            if (response.ok) {
                let result = await response.text();
                alert(result);
                form.reset();
            } else {
                alert('Ошибка')
            }
        }
    }

    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('._req');

        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];
            formRemoveError(input);

            if (input.classList.contains('_email')) {
                if (emailTest(input)) {
                    formAddError(input);
                    error++;
                }
            } else if (input.getAttribute("type") === "checkbox" && input.checked === false) {
                formAddError(input);
                error++;
            } else {
                if (input.value === '') {
                    formAddError(input);
                    error++;
                }
            }
        }
        return error;
    }
    function formAddError(input) {
        input.parentElement.classList.add('_error');
        input.classList.add('_error')
    }
    function formRemoveError(input) {
        input.parentElement.classList.remove('_error');
        input.classList.remove('_error')
    }

    function emailTest(input) {
        return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
    }

})


$(document).ready(function(){
    $('a[href^="#"], *[data-href^="#"]').on('click', function(e){
        e.preventDefault();
        var t = 150;
        var d = $(this).attr('data-href') ? $(this).attr('data-href') : $(this).attr('href');
        $('html,body').stop().animate({ scrollTop: $(d).offset().top }, t);
    });
});

