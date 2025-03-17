<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// if (G5_IS_MOBILE) {
//     include_once(G5_THEME_MOBILE_PATH.'/introduce/certificate.php');
//     return;
// }

include_once(G5_THEME_PATH.'/head.php');
// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
?>

<!-- 비쥬얼 영역 시작 -->
<div class="visual certificate">
    <div class="vis-con">
        <p class="subtitle">인증서</p>
        <p>신성이엔지에서 보유한 인증서입니다.</p>
    </div>
    <div class="bg"></div>
</div>
<!-- 비쥬얼 영역 끝 -->

<article id="certificate">
    <h2 class="hidden">본문 영역</h2>
    <section>
        <h3 class="hidden">인증서</h3>
        <div class="wrap">
            <!-- <div class="top-area">
                <div class="search-wrap">
                    <input type="text" placeholder="검색어를 입력해주세요">
                    <img src="/theme/basic/img/ico_search.png" alt="검색 아이콘">
                </div>
            </div> -->
            <div class="certificate-wrap"></div>
        </div>
    </section>
</article>

<script>
    const targetPlace = document.querySelector('.certificate-wrap');
    
    const addContent = (arr) => {
        let rawUl = document.createElement('ul');
        rawUl.classList.add('certificate-list');
        
        arr.forEach(obj => {
            rawUl.innerHTML += 
                `<li>
                    <div class="img-wrap">
                        <img src="${obj.img}" alt="${obj.name} 이미지">
                    </div>
                    <span>${obj.name}</span>
                </li>`;
        });

        targetPlace.append(rawUl);
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
</script>

<?php
include_once(G5_THEME_PATH.'/tail.php');