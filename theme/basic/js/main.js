const trackAll = document.querySelectorAll('.slide-track'); // 섹션5
const sec1 = document.querySelector('.main-sec1');
const sec2 = document.querySelector('.main-sec2');
const sec3 = document.querySelector('.main-sec3');
const sec2year = document.querySelector('.main-sec2 .year-val span'); // 섹션2 연도
const sec2sales = document.querySelector('.main-sec2 .sales-val span'); // 섹션2 매출
const sec2project = document.querySelector('.main-sec2 .project-val span'); // 섹션2 프로젝트
const sec4 = document.querySelector('.main-sec4-extra');
// const stickyObj = sec4.querySelector('.sticky-list');
// const stickyLastW =  stickyObj.querySelector('li:last-child').scrollWidth; // 스티키 마지막 요소 너비
// sec4.style.height = sec4.querySelector('.sticky-list').scrollWidth + 'px';
// const sec4ScTop = document.querySelector('.main-sec4-extra').offsetTop; // 스티키 스크롤 시작 시점
// const stickyEndVal = (sec4ScTop + sec4.clientHeight) - stickyLastW; // 스티키 스크롤 종료 시점
// const stickyEndPos = stickyObj.scrollWidth - stickyLastW + 8; // 스티키 리스트 엔드 포지션, 8은 실제 화면상에서 8px정도 틀어져서 조정
let isAutoPlayed = false;
let isSticky = false; // 섹션4 스티키 스크롤 이벤트 발생할 때 스크롤 단위가 클경우 트랜스폼 초기화를 위한 플래그

const addContent = (arr) => {
    let newCon = '';

    newCon = `
        <div class="swiper-container">
            <ul class="swiper-wrapper">
    `;

    arr.forEach(obj => {
        newCon += `
            <li class="swiper-slide">
                <img src="${obj.img}" alt="${obj.name} 이미지">
            </li>
        `;
    });

    newCon += `
            </ul>
        </div>
    `;

    sec3.innerHTML += newCon;

    new Swiper('.main-sec3 .swiper-container', {
        autoHeight: true,
        // centeredSlides: true,
        slidesOffsetBefore: 20,
        slidesOffsetAfter: 20,
        slidesPerView: 'auto',  // 단수
        spaceBetween: 20,  // 단사이 여백
        // loop: true,  // 무한 loop
    });
}

fetch("/theme/basic/json/certificate.json") // json파일 불러오기
.then((res) => {
    if(!res.ok) throw new Error;
    return res.json()
}) // 불러온 데이터를 json으로 변환
.then((json) => {
    addContent(json.data);
})
.catch((err) => {
    alert(err);
});

const increaseCnt = (dom, max) => {
    let currentCnt = 0;

    let autoIncrease = setInterval(() => {
        if(currentCnt >= max) clearInterval(autoIncrease); // max치 달성하면 interval제거

        dom.textContent = currentCnt;

        currentCnt += (max / 20);
    }, 50);
}

// 스와이퍼
let main1Swiper = new Swiper('.main-sec1 .swiper-container', {
    // autoHeight: true,
    slidesPerView: 'auto', // 단 수
    navigation: {   //이전/다음 버튼
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    pagination : { // 페이징 설정
		el : '.swiper-pagination',
		clickable : true, // 페이징을 클릭하면 해당 영역으로 이동
	},
    loop: 'true',
});

let main4Swiper = new Swiper('.main-sec4 .swiper-container', {
    // autoHeight: true,
    slidesPerView: 'auto',  // 단수
    spaceBetween: 80,  // 단사이 여백
    pagination : { // 페이징 설정
		el : '.swiper-pagination',
		clickable : true,
	},
    breakpoints: {
        1024: {
            spaceBetween: 20,
            slidesOffsetBefore: 20,
            slidesOffsetAfter: 20,
        }
    }
});

// 스크롤 이벤트 토탈
// 섹션2 카운팅 애니메이션, 섹션4 스티키 스크롤
window.addEventListener('scroll', () => {
    // 화면 끝에 sec2가 닿은 상태에서 190px(padding + 글자 반 정도)정도 더 갔을 때 애니메이션 시작
    if(window.scrollY >= (sec2.offsetTop - window.innerHeight + 190) && !isAutoPlayed) { // 섹션2 카운팅 시작 시점
        isAutoPlayed = true;

        increaseCnt(sec2year, 20);
        increaseCnt(sec2sales, 1900);
        increaseCnt(sec2project, 100);
    }

    // 섹션4 sticky 스크롤
    // let distance = window.scrollY - sec4ScTop;
    // 200 은 스크롤 여유를 위해 준 임의 값
    // if(window.scrollY >= (sec4ScTop + 200) && window.scrollY <= stickyEndVal) {
    //     stickyObj.style.transform = `translateX(-${distance}px)`;
        
    //     isSticky = true;
    // } else {
    //     if(isSticky) {
    //         if(window.scrollY > stickyEndVal) {
    //             stickyObj.style.transform = `translateX(-${stickyEndPos}px)`;
    //         } else {
    //             stickyObj.style.transform = `translateX(0)`;
    //         }
    //         isSticky = false;
    //     } else { // 스티키 스크롤을 넘은 상태에서 새로고침 해도 리스트 포지션을 마지막으로 잡을 수 있도록 조정
    //         if(window.scrollY > stickyEndVal) {
    //             stickyObj.style.transform = `translateX(-${stickyEndPos}px)`;
    //         }
    //     }
    // }
});

// 섹션5 각 트랙에 있는 리스트 클론
trackAll.forEach(track => {
    let thisClone = track.querySelector('.logo-slide').cloneNode(true);
    track.append(thisClone);
});