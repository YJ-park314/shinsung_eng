const header = document.getElementById('header');
const gnb = document.querySelector('#gnb');
const hamMenu = header.querySelector('.ham-menu');
let headerFlag = false;
let headerMouseFlag = false;
let timer = null;
// let handleMouseOver = null;
// let handleMouseOut = null;
let handleDepth1Click = null;

const setMoStatus = () => {
    if(window.innerWidth > 1024) { // pc
        header.classList.remove('mo');
        gnb.classList.remove('on');

        // handleMouseOver = header.addEventListener('mouseover', e => {
        //     if(!headerFlag && !header.classList.contains('mo')) {
        //         header.classList.add('active');
        //     }
        
        //     headerMouseFlag = true;
        // });
        
        // handleMouseOut = header.addEventListener('mouseout', () => {
        //     if(!headerFlag) {
        //         header.classList.remove('active');
        //     }
        
        //     if(window.scrollY < 120) {
        //         headerFlag = false;
        //         header.classList.remove('active');
        //     }
        
        //     headerMouseFlag = false;
        // });
    } else { // mo
        header.classList.add('mo');

        gnb.querySelectorAll('.has-2dpt h3 a').forEach((a, idx) => {
            a.addEventListener('click', e => {
                e.preventDefault();

                gnb.querySelectorAll('.has-2dpt h3 a').forEach((a2, idx2) => {
                    if(a == a2) {
                        // a2.closest('li').querySelector('.depth2-wrap').classList.add('active');
                        $(a2).closest('li').find('.depth2-wrap').slideDown();
                    } else {
                        // a2.closest('li').querySelector('.depth2-wrap').classList.remove('active');
                        $(a2).closest('li').find('.depth2-wrap').slideUp();
                    }
                });
            });
        });

        // header.removeEventListener('mouseover', handleMouseOver);
        // header.removeEventListener('mouseout', handleMouseOut);
    }
}

setMoStatus();

// 새로고침시에 스크롤 이벤트 반영 안될 때가 있어서 스크롤 동작 추가
window.addEventListener('load', () => {
    window.scrollBy({
        behavior: 'smooth',
        top: 1,
    });
});

// 모바일 구분을 위한 resize이벤트
window.addEventListener('resize', () => {
    clearTimeout(timer);

    timer = setTimeout(() => {
        setMoStatus();
    }, 200);
});

// 모바일 gnb 여닫기
hamMenu.addEventListener('click', e => {
    e.preventDefault();

    // header.classList.add('active');
    gnb.classList.add('on');
});

gnb.querySelector('.close-gnb').addEventListener('click', e => {
    e.preventDefault();

    // if(window.scrollY <= 120) {
    //     header.classList.remove('active');
    // }

    gnb.classList.remove('on');
});

// 헤더 active
if(document.querySelector('.visual')) {
    window.addEventListener('scroll', () => {
        if(window.scrollY >= 120) {
            header.classList.add('active');
        } else {
            header.classList.remove('active');
            // if(!headerMouseFlag && !gnb.classList.contains('on')) {
            //     header.classList.remove('active');

            //     if(!header.classList.contains('mo')) {
            //         headerFlag = false;
            //     }
            // }
        }
    });
} else {
    header.classList.add('active');
}

// 모바일 카카오톡에서 링크 첫 진입시 visual 사이즈 고정
// 안 하면 카카오톡 상단 주소창 때문에 덜컥거림
if(window.innerWidth <= 1024 && document.querySelector('.visual')) {
    const agent = window.navigator.userAgent.toLowerCase();

    if(agent.includes('kakaotalk')) {
        const viewMaxH = window.innerHeight;
        document.querySelector('.visual').style.maxHeight = (viewMaxH) + 'px';
    }
}

// 탭메뉴
if(document.querySelector('.tabs')) {
    const tabs = document.querySelectorAll('.tabs a');
    const tabConAll = document.querySelectorAll('.tab-con-list>li');
    
    tabs.forEach((tab, idx) => {
        tab.addEventListener('click', e => {
            e.preventDefault();

            tabs.forEach((tab2, idx2) => {
                if(idx == idx2) {
                    tab2.closest('li').classList.add('active');
                } else {
                    tab2.closest('li').classList.remove('active');
                }
            });

            tabConAll.forEach((con, conIdx) => {
                if(idx == conIdx) {
                    con.classList.add('active');
                } else {
                    con.classList.remove('active');
                }
            });
        });
    });
}