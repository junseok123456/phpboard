<h1>글쓰기</h1>
<form id="writeForm" action="store.php" method="post">
    제목: <input type="text" name="title"><br>
    작성자: <br> <input type="text" name="name"> <br>
    내용: <br> <textarea name="contact"></textarea><br>
    이메일: <br> <input type="text" name="email"> <br>
    회사: <br> <input type="text" name="company"> <br>
    직급: <br> <input type="text" name="position"> <br>
    <button type="submit">저장</button>
</form>

<script>
    document.getElementById('writeForm').addEventListener('submit', function(e) {
        e.preventDefault();
        if (confirm('저장하시겠습니까?')) {
            const form = e.target;
            const formData = new FormData(form);

            fetch(form.action, {
                method: 'POST',
                body: formData
            })
                .then(res => res.text())
                .then(result => {
                    const trimmed = result.trim();
                    if (trimmed === 'success') {
                        alert('저장되었습니다.');
                        window.location.href = 'index.php';
                    } else {
                        alert('저장에 실패했습니다.');
                    }
                })
                .catch(() => {
                    alert('오류가 발생했습니다.');
                });
        }
    });
</script>

