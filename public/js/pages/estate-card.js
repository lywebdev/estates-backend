DOMLoadedFunctions.push({call:()=>{let e=document.querySelector(".services-section"),i={pc:e.innerHTML},t={sectionTitle:e.querySelector(".section__title"),serviceCards:e.querySelectorAll(".service-card")};serviceSectionMobileTemplate=`\n            <div class="container-fluid">\n                <div class="ac-grid">\n                    <div class="row">\n                        <div class="col-md-12">\n                            <div class="section__title">${t.sectionTitle.innerHTML}</div>\n                        </div>\n                    </div>\n                </div>\n            </div>\n            <div class="services-section__cards">\n                <div class="swiper">\n                    <div class="swiper-wrapper">\n        `;for(let e=0;e<t.serviceCards.length;e++)t.serviceCards[e]&&t.serviceCards[e]+1?(serviceSectionMobileTemplate+='<div class="swiper-slide"><div class="service__row">',serviceSectionMobileTemplate+=`${t.serviceCards[e].outerHTML}`,serviceSectionMobileTemplate+=`${t.serviceCards[e+1].outerHTML}`,serviceSectionMobileTemplate+="</div></div>",e++):(serviceSectionMobileTemplate+='<div class="swiper-slide"><div class="service__row">',serviceSectionMobileTemplate+=`${t.serviceCards[e].outerHTML}`,serviceSectionMobileTemplate+="</div></div>");serviceSectionMobileTemplate+='\n                    </div>\n                </div>\n                <div class="section-slider-pagination"></div>\n            </div>\n        ',helper.hooks.setTemplates({mobile:{about:serviceSectionMobileTemplate},pc:{about:i.pc}});let s={func:()=>{e.innerHTML=templates.mobile.about;let i=document.querySelector(".services-section__cards .swiper");new Swiper(i,{slidesPerView:1,spaceBetween:15,breakpoints:{1:{pagination:{el:document.querySelector(".services-section__cards .section-slider-pagination")}},800:{pagination:!1}}})}},n={func:()=>{e.innerHTML=templates.pc.about}},c={mobile:!1,pc:!1},r={func:()=>{if(device.width<=1800){if(!c.mobile){let e=document.querySelector(".ec-agent"),i=e.cloneNode(1);document.querySelector(".ec-grid").insertBefore(i,document.querySelector(".ec-desc.mortgage-selection")),e.parentNode.removeChild(e),c.pc=!1}}else if(!c.pc){let e=document.querySelector(".ec-agent"),i=e.cloneNode(1);document.querySelector(".estate-card").appendChild(i),e.parentNode.removeChild(e),c.mobile=!1}}};setMobileVersionHookFunctions.push(s),setPcVersionHookFunctions.push(n),resizeDeviceHookFunctions.push(r);const o=new Swiper(".ec-slider__thumbs .swiper",{spaceBetween:20,navigation:{nextEl:document.querySelector(".ec-slider__thumbs__navigation .btn__next"),prevEl:document.querySelector(".ec-slider__thumbs__navigation .btn__prev")},breakpoints:{0:{slidesPerView:2},800:{slidesPerView:5}}});new Swiper(".ec-slider__main .swiper",{slidesPerView:1,navigation:{nextEl:document.querySelector(".ec-slider__main__navigation .btn__next"),prevEl:document.querySelector(".ec-slider__main__navigation .btn__prev")},thumbs:{swiper:o}});function l(e){e.classList.add("collapsed");let i=document.createElement("div");i.classList.add("btn-read-more");let t='<svg width="10" height="5" viewBox="0 0 10 5" fill="none" xmlns="http://www.w3.org/2000/svg">\n                    <path d="M0.625033 0.00334696C0.707077 0.00323551 0.78833 0.0195841 0.864104 0.0514494C0.939879 0.0833148 1.00867 0.130066 1.06652 0.189006L4.26233 3.42622C4.35902 3.52421 4.47382 3.60193 4.60017 3.65496C4.72651 3.70799 4.86194 3.73529 4.9987 3.73529C5.13546 3.73529 5.27088 3.70799 5.39723 3.65496C5.52358 3.60193 5.63838 3.52421 5.73507 3.42622L8.92588 0.193225C8.98351 0.132774 9.05244 0.0845564 9.12867 0.0513852C9.20489 0.0182141 9.28687 0.00075418 9.36982 2.38975e-05C9.45278 -0.000706385 9.53504 0.0153076 9.61182 0.0471318C9.6886 0.078956 9.75836 0.125953 9.81701 0.18538C9.87567 0.244808 9.92206 0.315475 9.95348 0.39326C9.98489 0.471044 10.0007 0.554388 9.99998 0.638428C9.99926 0.722467 9.98202 0.80552 9.94928 0.88274C9.91654 0.95996 9.86894 1.0298 9.80927 1.08819L6.61847 4.32118C6.1886 4.75587 5.60606 5 4.9987 5C4.39134 5 3.8088 4.75587 3.37893 4.32118L0.183127 1.08397C0.0956969 0.995449 0.0361497 0.882646 0.0120202 0.759832C-0.0121094 0.637018 0.00026322 0.509713 0.0475724 0.394025C0.0948816 0.278337 0.175001 0.179466 0.277793 0.109923C0.380584 0.0403799 0.501428 0.0032902 0.625033 0.00334696Z" fill="#AA0001"/>\n                </svg>';i.innerHTML=`Читать полностью ${t}`,e.append(i);let s=e.querySelector(".btn-read-more");s.addEventListener("click",(()=>{e.classList.contains("collapsed")?(e.classList.remove("collapsed"),s.innerHTML=`Свернуть ${t}`):(e.classList.add("collapsed"),s.innerHTML=`Читать полностью ${t}`)}))}let d=document.querySelectorAll(".read-more");for(let e=0;e<d.length;e++){let i=d[e];i.querySelector(".ec-desc__text").textContent.length>250&&l(i)}}});
