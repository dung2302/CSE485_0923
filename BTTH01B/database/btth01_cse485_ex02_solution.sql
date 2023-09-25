-Liệt kê các bài viết về các bài hát thuộc thể loại Nhạc trữ tình 
 SELECT ten_bhat FROM baiviet WHERE ma_tloai=4;
 
 --Liệt kê các bài viết của tác giả “Nhacvietplus”
 SELECT ten_bhat FROM baiviet JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
	WHERE tacgia.ten_tgia = 'Nhacvietplus';
--Liệt kê các thể loại nhạc chưa có bài viết cảm nhận nào
SELECT ten_tloai FROM theloai WHERE ma_tloai NOT IN (SELECT DISTINCT ma_tloai FROM baiviet);
--Liệt kê các bài viết với các thông tin sau mã bài viết tên bài viết tên bài hát tên tác giả tên thể loại ngày viết
SELECT baiviet.ma_bviet, tieude,ten_bhat, tacgia.ten_tgia, theloai.ten_tloai, ngayviet
FROM baiviet JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia
JOIN theloai ON baiviet.ma_tloai = theloai.ma_theloai;