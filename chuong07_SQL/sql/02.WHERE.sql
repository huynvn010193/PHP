-- 01 ; Hiểm thị tất cả các thông tin kiến trúc sư le thanh tung 
SELECT * FROM architect
WHERE name = "le thanh tung";

-- 02 : Hiển thị tên, năm sinh các công nhân có chuyên môn hàn hoặc điện
SELECT name , birthday, skill FROM worker 
WHERE skill = 'han' or skill = 'dien';

-- 03 : Hiển thị tên của các công nhân có chuyên môn là Hàn hoặc điện và có năm sinh lớn hơn 1948
SELECT name , birthday, skill FROM worker 
WHERE (skill = 'han' OR skill = 'dien') AND (birthday > 1948);

-- 04 : Hiển thị những công nhân bắt đầu vào nghề khi tuổi dưới 20
SELECT * FROM worker 
WHERE (year - birthday) < 20;

-- 05 : Hiển thị những công nhân có năm sinh 1945, 1940,1948
-- cách 1
SELECT * FROM worker 
WHERE birthday = 1945 OR birthday = 1948 OR birthday = 1940;

-- cách 2
SELECT * FROM worker 
WHERE birthday IN(1940,1945,1948); -- thuộc
-- WHERE birthday NOT IN(1940,1945,1948); -- không thuộc 

-- 06 : Tìm kiếm những công trình có chi phí đầu tư từ 200 đến 500 triệu đồng
-- cách 1
SELECT * FROM building
WHERE cost >= 200 AND cost <= 500;

-- cách 2
SELECT * FROM building
WHERE cost BETWEEN 200 AND 500;

-- 07 : Tìm kiếm 1 kiến trúc sư có họ là Nguyễn
-- % : Đại diện cho 1 chuỗi ktự
SELECT * FROM architect
WHERE name LIKE 'nguyen%';

-- 08 : Tìm kiếm những kiến trúc sư có họ lót là anh
SELECT * FROM architect
WHERE name LIKE '%th%';

-- 09 : Tìm kiếm những kiến trúc sư có tên là 3 ký tự và bắt đầu là TH
SELECT * FROM architect
WHERE name LIKE '%th_';

-- 10 : Tìm chủ thầu không có phone
SELECT * FROM contractor
WHERE phone IS NULL;

















