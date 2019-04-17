<?php
require_once('./config.php');
require_once('./CommonFunc.php');
session_start();
require_once('./Content.php');
checkAuth();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>EnglishTurtle</title>
    <link rel="stylesheet" href="webAnimation.css">
    <link rel="icon" href="img/turtle.jpeg">

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light" rel="stylesheet">
    <script src="/common.js"></script>
    <style>
        .header{
            min-height: 3350px !important;
        }
    </style>
</head>
<body>
<!-- header bar -->
<?php getHeader(); ?>
    <!-- end header bar -->
    <!-- CONTENT -->
    <!-- Test -->
    <div class="content" style='width:initial; margin:unset'>
        <div>
        <div><h2>Rút Gọn Mệnh Đề Quan Hệ</h2><div class="theory-descript"><span><strong>⒈ Rút gọn mệnh đề quan hệ bằng <em>to V</em>:</strong><br>  Động từ nguyên mẫu có to được sử dụng sau một danh từ hoặc đại từ để thay thế cho mệnh đề quan hệ.<blockquote>
Cấu trúc 1:<br> <strong>S + V + Noun/pronoun + RELATIVE CLAUSE</strong><br>  <strong>→ S + V + Noun/pronoun + to V</strong></blockquote>
  Ví dụ:<br>  We had a car which we could drive.<br>  → We had a car <strong>to drive</strong>.<br>  I can’t find anyone that I can make friend with.<br> → I can’t find anyone <strong>to make</strong> friend with.<blockquote>
Cấu trúc 2:<br> <strong>S + V + Noun + RELATIVE CLAUSE</strong><br>  <strong>→ S + V + Noun + FOR + Pronoun + to V</strong></blockquote>
  Ví dụ:<br> This is a nice garden that your children can play in.<br>  → This is a nice garden <strong>for your children to play</strong> in.<blockquote>
Cấu trúc 3:<br> <strong>S + V + Noun + RELATIVE CLAUSE (bị động)</strong><br>  <strong>→ S + V + Noun + to be V3/-ed</strong></blockquote>
  Ví dụ:<br>  There is a lot of homework which has to be done.<br>  → There is a lot of homework <strong>to be done</strong>.<br><br>   <strong>Lưu ý:</strong><br>  - To -V được sử dụng để rút gọn các mệnh đề quan hệ có <strong>the first, the second, the last, the only hoặc các dạng so sánh nhất</strong><br>  Ví dụ:<br>  He loves parties. He is always the first who comes and the last who leaves.<br>  → He loves parties. He is always the first <strong>to come</strong> and <strong>the last to leave</strong>.<br>  Mr. Blair is the youngest person who has become the Prime Minister.<br>  → Mr. Blair is the youngest person <strong>to become</strong> the Prime Minister.<br><br>   - To-V được sử dụng để rút gọn các mệnh đề quan hệ chỉ mục đích, sự cho phép hay việc phải làm.<br>  Ví dụ:<br> He bought a lot of books that he can read at home.<br>  → He bought a lot of books <strong>to read</strong> at home.<br><br>    - Mệnh đề quan hệ với <strong>whom</strong>, <strong>không</strong> dùng To-V để rút gọn<br><br>  <strong>⒉ Rút gọn mệnh đề quan hệ bằng phân từ:</strong><br>  • <strong>Với hiện tại phân từ - V-ing:</strong> Được dùng khi câu mang nghĩa chủ động <br><br>   <strong>Trường hợp 1:</strong> bỏ đại từ quan hệ và động từ to be<blockquote>
Cấu trúc: <strong>S + V + Noun/pronoun + RELATIVE PRONOUN + be + V-ing</strong><br>  <strong>→ S + V + Noun/pronoun + V-ing</strong></blockquote>
 Ví dụ:<br>  The man who is talking to my father is a doctor.<br>  → The man <strong>talking</strong> to my father is a doctor.<br><br>   <strong>Trường hợp 2:</strong> bỏ đại từ quan hệ và thêm –ING vào động từ<blockquote>
Cấu trúc: <strong>S + V + noun/pronoun + RELATIVE PRONOUN + V</strong><br>  <strong>→ S + V + noun/pronoun + V-ing</strong></blockquote>
 Ví dụ:<br>  The road which joins two villages is a lane.<br>  → The road <strong>joining</strong> two villages is a lan.<br><br>   • <strong>Với quá khứ phân từ - V3/-ed:</strong> Được dùng khi câu mang nghĩa bị động<br>  Bỏ đại từ quan hệ (relative pronouns), động từ to be, nhưng vẫn giữ quá khứ phân từ (V3/-ed)<blockquote>
Cấu trúc: <strong>S + V + noun/pronoun + RELATIVE PRONOUN + BE + V3/-ed</strong><br>  <strong>→ S + V + noun/ pronoun + V3/-ed</strong></blockquote>
 Ví dụ:<br>  The books which were written by Mark Twain are very interesting.<br>  → The books <strong>written</strong> by Mark Twain are very interesting.<br><br>   <strong>Lưu ý:</strong> Các trường hợp sau luôn dùng <strong>V-ing</strong> để rút gọn<br>  - Động từ trong mệnh đề quan hệ phải ở thì tiếp diễn<br> - Động từ trong mệnh đề quan hệ diễn tả một thói quen hay một hành động liên tục, tính chất lâu dài<br>  Ví dụ: I live in a pleasant room which overlooks the garden.<br>  → I live in a pleasant room <strong>overlooking</strong> the garden.<br>  - Động từ trong mệnh đề quan hệ diễn tả một ước muốn (WISH, DESIRE, WANT, HOPE)<br> - Mệnh đề quan hệ không xác định có chứa những động từ chỉ hiểu biết hoặc suy nghĩ (know, think, expect, believed)<br>  Ví dụ:<br>  Peter, who thought the journey would take two days, was a tour-guide.<br>  → Peter, <strong>thinking</strong> the journey would take two days, was a tour-guide.<br>  - Mệnh đề quan hệ theo sau THERE IS/ WAS<br> Ví dụ:<br>  Is there anyone that is waiting for me?<br>  → Is there anyone <strong>waiting</strong> for me?<br><br>  <strong>⒊ Rút gọn mệnh đề quan hệ dùng cụm danh từ (đồng cách danh từ):</strong><br>  Khi mệnh đề quan hệ có dạng: <strong>S + be + Danh từ/ cụm danh từ/ cụm giới từ</strong> ta bỏ who, which và be, giữ lại danh từ, cụm danh từ, cụm giới từ.<br>  Ví dụ:<br>  Football, which is a popular sport, is very good for health<br>  → Football, <strong>a popular sport</strong>, is very good for health.<br>  Do you like the dress which is on the bed?<br>  → Do you like <strong>the dress</strong> on the bed?<br><br>   <strong>⒋ Mệnh đề rút gọn tính từ có dạng <em>be + tính từ/cụm tính từ</em>:</strong><br>  Có 2 cách rút gọn:<br> <strong>Cách 1</strong>: Bỏ who, which… và to be; giữ nguyên tính từ phía sau.<br>  - Điều kiện 1: Nếu phía trước <strong>that</strong> là đại từ bất định như <strong>something, anything, anybody</strong> …<br>  Ví dụ:<br>  There must be something that is wrong<br>  → There must be <strong>something wrong</strong>.<br>  - Điều kiện 2: Có dấu phẩy phía trước và phải có từ 2 tính từ trở lên.<br>  Ví dụ:<br>  My computer, which is old and out of date, still works very well.<br>  → My computer, <strong>old and out of date</strong>, still works very well.<br><br>   <strong>Cách 2</strong>: Những trường hợp còn lại ta đem tính từ lên trước danh từ.<br>  Ví dụ: My computer, which is old, still works very well.<br>  → My <strong>old computer</strong> still works very well.<br>  I buy a hat which is very beautiful and fashionable<br>  → I buy a very <strong>beautiful and fashionable hat</strong>.<br> <strong>Nhưng nếu cụm tính từ có bao gồm danh từ thì phải dùng V-ing để rút gọn.</strong><br>  Ví dụ: I met a man who was very good at both English and French<br>  → I met a man being very good at both English and French.<br></span></div></div>
 <div><h2>Rút Gọn Mệnh Đề Danh Từ</h2><div class="theory-descript"><span>Khi mệnh đề danh từ ở vị trí tân ngữ và có cùng tân ngữ với mệnh đề chính thì khi đó ta được phép rút gọn mệnh đề danh từ bằng cách thay cả cụm (S + V + O) phía sau từ bắt đầu mệnh đề danh từ (what/ that/ if / …) bằng <strong>to V</strong> <blockquote>
Cấu trúc: <strong>S + V + what/that/if …. + S + V …</strong><br>  → <strong>S + V + what/that/if + to V</strong> </blockquote>
  Ví dụ:<br>  I can’t decide whether I will leave or stay → I can’t decide <strong>whether to leave or stay</strong>. <br></span></div></div>
  <div><h2>Rút Gọn Mệnh Đề Trạng Từ</h2><div class="theory-descript"><span><strong>Quy tắc chung:</strong> <br><br>   Nếu muốn rút gọn mệnh đề trạng ngữ, trong câu phải thoả mãn hai yếu tố sau:<br>  - Hai mệnh đề trong câu phải có cùng chủ ngữ<br>  - Trong câu thường phải có một liên từ nối hai mệnh đề (như <em>as, before, while, although, …</em>)<br> Lúc này, mệnh đề trạng ngữ sẽ được rút gọn bằng cách bỏ chủ ngữ đi và chuyển động từ trong câu thành dạng <strong>V-ing</strong> (present participle). Tuy nhiên, tuỳ trường hợp mà ta có thể lược bỏ ít hoặc nhiều thành phần câu. <br><br>   <strong>Cách rút gọn mệnh đề trạng ngữ</strong> <br><br>  <strong>⒈ Rút gọn trong câu chủ động:</strong><br>  • <em>Cấp độ 1: Chỉ lược bỏ chủ ngữ</em><br>  Ta lược bỏ chủ ngữ ở mệnh đề trạng ngữ (mệnh đề phụ, mệnh đề có liên từ), động từ chính trong câu chuyển thành <strong>V-ing</strong>, trường hợp có <em>to be</em> thì khi rút gọn sẽ là <em>being</em>.<br>  Ví dụ:<br>  When I came home, I saw a kitty.<br> → When <strong>coming</strong> home, I saw a kitty.<br>  • <em>Cấp độ 2: Lược bỏ cả chủ ngữ lẫn liên từ</em><br>  Hình thức rút gọn ở cấp độ 2 tương tự như cấp độ 1, nhưng lúc này ta có thể bỏ luôn cả liên từ.<br>  Ví dụ:<br>  When I came home, I saw a kitty.<br> → <strong>Coming</strong> home, I saw a kitty.<br> Đối với các mệnh đề trạng ngữ chỉ thời gian, để nhấn mạnh thời gian hoặc hành động nào xảy ra trước, ta có thể dùng <strong>having + V3/-ed</strong> để rút gọn mệnh đề trạng ngữ.<br>  Ví dụ:<br>  After he finishes his work, he goes home.<br> → <strong>After finishing</strong> his work, he goes home. ≈ <strong>Having finished</strong> his work, he goes home. <br><br>   <strong>⒉ Rút gọn trong câu bị động:</strong><br> • <em>Cấp độ 1: Chỉ rút gọn chủ ngữ</em><br>  Ta lược bỏ chủ ngữ ở mệnh đề trạng ngữ (hay mệnh đề có liên từ), động từ <em>to be</em> được chia lúc này sẽ được chuyển thành <strong>being</strong>, theo sau là V3/-ed như bình thường.<br>  Ví dụ:<br>  As he is called a liar, he becomes angry.<br>  → As <strong>being</strong> called a liar, he becomes angry.<br>  • <em>Cấp độ 2: Rút gọn chủ ngữ và to be</em><br>  Tương tự như cấp độ 1, nhưng lúc này ta có thể bỏ cả <strong>being</strong> và chỉ giữ lại mỗi liên từ và động từ V3/-ed. (<em>Lưu ý: với các liên từ như <strong>because of</strong> bắt buộc theo sau phải là N/V-ing thì không thể áp dụng cách rút gọn này</em>)<br>  Ví dụ:<br> As he is called a liar, he becomes angry.<br>  → As <strong>called</strong> a liar, he becomes angry.<br> • <em>Cấp độ 3: Rút gọn cả liên chủ ngữ và to be</em><br> Đây là hình thức rút gọn cao nhất trong mệnh đề trạng ngữ dạng bị động. Khi đó, cả liên từ, chủ ngữ lẫn động từ đều được lược bỏ, và chỉ giữ lại duy nhất động từ V3/-ed. Nếu không để ý kỹ, nhiều người sẽ bị nhầm lẫn với cách rút gọn mệnh đề quan hệ dạng bị động.<br>  Ví dụ:<br> As he is called a liar, he becomes angry.<br>  → <strong>Called</strong> a liar, he becomes angry.<br> <strong>Chú ý:</strong> Nếu đằng sau động từ là một cụm danh từ thì ta cũng có thể áp dụng cách rút gọn cả liên từ, chủ ngữ, động từ.<br>  Ví dụ:<br>  As he is a king of the Anunnaki, he was worshiped by his descendants.<br>  → <strong>As being</strong> a king of the Anunnaki, he was worshiped by his descendants.<br> → <strong>As</strong> a king of the Anunnaki, he was worshiped by his descendants.<br> → <strong>A king of the Anunnaki</strong>, he was worshiped by his descendants. <br></span></div></div>

        </div>
    </div>
    <!-- END CONTENT -->
</div>
<?php getFooter(); ?>

</body>
</html>
