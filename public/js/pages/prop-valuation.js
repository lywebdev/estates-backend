let serviceSectionContainer=document.querySelector(".types-eval-in-company"),serviceSection={pc:serviceSectionContainer.innerHTML},serviceSectionRows={pc:{sectionTitle:serviceSectionContainer.querySelector(".section__title"),serviceCards:serviceSectionContainer.querySelectorAll(".service-card")}};serviceSectionMobileTemplate=`\n    <div class="container-fluid">\n        <div class="ac-grid">\n            <div class="row">\n                <div class="col-md-12">\n                    <div class="section__title">${serviceSectionRows.pc.sectionTitle.innerHTML}</div>\n                </div>\n            </div>\n        </div>\n    </div>\n    <div class="types-eval-in-company__cards">\n    <div class="swiper">\n    <div class="swiper-wrapper">\n`;let cardsCounter=1;for(let e=0;e<serviceSectionRows.pc.serviceCards.length;e++)serviceSectionRows.pc.serviceCards[e]&&serviceSectionRows.pc.serviceCards[e]+1?(serviceSectionMobileTemplate+='<div class="swiper-slide"><div class="service__row">',serviceSectionMobileTemplate+=`${serviceSectionRows.pc.serviceCards[e].outerHTML}`,serviceSectionMobileTemplate+=`${serviceSectionRows.pc.serviceCards[e+1].outerHTML}`,serviceSectionMobileTemplate+="</div></div>",e++):(serviceSectionMobileTemplate+='<div class="swiper-slide"><div class="service__row">',serviceSectionMobileTemplate+=`${serviceSectionRows.pc.serviceCards[e].outerHTML}`,serviceSectionMobileTemplate+="</div></div>");serviceSectionMobileTemplate+="\n    </div>\n    </div>\n    </div>\n",helper.hooks.setTemplates({mobile:{about:serviceSectionMobileTemplate},pc:{about:serviceSection.pc}});let setMobile={func:()=>{serviceSectionContainer.innerHTML=templates.mobile.about;let e=document.querySelector(".types-eval-in-company__cards .swiper");new Swiper(e,{slidesPerView:1,spaceBetween:15})}},setPc={func:()=>{serviceSectionContainer.innerHTML=templates.pc.about}};setMobileVersionHookFunctions.push(setMobile),setPcVersionHookFunctions.push(setPc);
