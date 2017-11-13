-- 01. Hiển thị toàn bộ nội dung của bảng Architext

SELECT * FROM architect;

-- 02. Hiển thị danh sách gồm họ tên và giới tính

SELECT name, sex FROM architect; 

-- 03. Hiển thị năm sinh của các kiến trúc sư

SELECT ALL birthday FROM architect;

-- 04. Hiển thị những năm sinh có thể có
-- Từ khó DISTINCT : không hiển thị 2 dòng dữ liệu trùng nhau

SELECT DISTINCT birthday FROM architect;

-- 05 . Hiển thị năm sinh của các kiến trúc sư gồm họ tên và năm sinh , giá trị năm sinh tăng dần
-- giá trị asc là giá trị mặc định
SELECT name, birthday FROM architect 
ORDER BY birthday asc;

-- 06 . Hiển thị năm sinh của các kiến trúc sư gồm họ tên và năm sinh , giá trị năm sinh giảm dần
SELECT name, birthday FROM architect 
ORDER BY birthday desc;

-- 07 . Hiển thị danh sách công trình sắp xếp theo thứ tự chi phí từ thấp đến cao.
-- Nếu 2 công trình có chi phí bằng nhau thì sắp xếp theo tên TP
SELECT name,city,cost FROM building
ORDER BY cost ASC, city DESC;










