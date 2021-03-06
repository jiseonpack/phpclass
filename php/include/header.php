<header id="header">
    <h1 class="logo">
        <a href="../pages/main.php">PHP <em>class</em></a>
    </h1>
    <nav class="menu">
        <h2 class="ir_so">메인 메뉴</h2>
        <ul>
            <li><a href="../login/join.php">회원가입</a></li>
            <li><a href="../comment/comment.php">댓글</a></li>
            <li><a href="../board/board.php">게시판</a></li>
            <li><a href="../blog/blog.php">블로그</a></li>
            <li><a href="../quiz/quiz.php">퀴즈</a>
                <ul class="sub">
                    <li><a href="../quiz/quizCreate.php">문제 만들기</a></li>
                    <li><a href="../quiz/quiz.php">문제 풀기</a></li>
                    <li><a href="../quiz/quizExam.php">기출 문제</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div class="member">
        <span class="ir_so">회원 정보 영역</span>
        <?php if(isset($_SESSION['memberID'])){?>
                <a href="../mypage/mypage.php" class="setting">
                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_315_195" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="30" height="30">
                        <path d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z" fill="white"/>
                    </mask>
                    <g mask="url(#mask0_315_195)">
                        <path d="M15 30C23.2843 30 30 23.2843 30 15C30 6.71573 23.2843 0 15 0C6.71573 0 0 6.71573 0 15C0 23.2843 6.71573 30 15 30Z" fill="#414141"/>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9997 30.0763H26.1537V26.5233C26.1537 25.3503 25.3517 23.8663 24.3717 23.2263L18.9367 19.9263C18.5117 19.6733 18.0237 19.3063 18.0237 18.2333C18.0237 17.5303 18.6167 16.9733 18.7957 16.7533C19.668 15.8068 20.1514 14.5664 20.1497 13.2793V10.6463C20.1497 7.7923 17.8457 6.1543 14.9997 6.1543C12.1527 6.1543 9.8477 7.7923 9.8477 10.6463V13.2793C9.8477 14.6233 10.3647 15.8383 11.2037 16.7533C11.3817 16.9733 11.9747 17.5303 11.9747 18.2333C11.9747 19.3073 11.4867 19.6733 11.0617 19.9253L5.6257 23.2263C4.6467 23.8663 3.8457 25.3503 3.8457 26.5233V30.0763H14.9997Z" fill="#595959"/>
                    </g>
                </svg>
                <?=$_SESSION['youName']?>님 환영합니다.</a>
                <a href="../login/logout.php">로그아웃</a>
        <?php } else {?>
                <a href="../login/join.php">회원가입</a>
                <a href="../login/login.php">로그인</a>
        <?php } ?>
    </div>     
</header>