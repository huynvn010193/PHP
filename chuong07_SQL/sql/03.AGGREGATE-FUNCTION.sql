-- Aggregate Functions COUNT, MAX, MIX, SUM, AVG

-- 01. Thống kê tổng số kiến trúc sư
SELECT COUNT(id) AS tong FROM architect;

-- Danh sách tên của các kiến trúc sư
SELECT name AS hoten FROM architect;

-- 02. Thống kê tổng số kiến trúc sư nam
SELECT COUNT(id) AS tong_nam FROM architect
WHERE sex = 1;

SELECT COUNT(id) AS tong_nu FROM architect
WHERE sex = 0;

-- 03. Tìm ngày tham gia công trình nhiều nhất của công nhân
SELECT MAX(total) AS max FROM work;

-- 04. Tìm ngày tham gia công trình ít nhất của công nhân
SELECT MIN(total) AS min FROM work;

-- 05. Tìm tổng số ngày tham gia công trình của tất cả công nhân
SELECT SUM(total) AS tong_work FROM work;

-- 06. Tìm tổng chi phí phải trả cho việc thiết kế công trình của kiến trúc sư có mã số 1
SELECT SUM(benefit) AS tong_work_1 FROM design
WHERE architect_id = 1;

-- 07. Tìm trung bình mỗi ngày tham gia của công nhân
SELECT AVG(total) AS tb_day FROM work;

SELECT MAX(total) AS max, MIN(total) AS min, SUM(total) AS sum, AVG(total) as avf FROM work;

-- 08. Hiển thị thông tin kiến trúc sư: họ tên, tuổi.
SELECT name, (2017 - birthday) AS age FROM architect;

-- 09. Tính thù lao kiến trúc sư: thù lao = benefit * 1000
SELECT architect_id,building_id, (benefit * 100) AS cost FROM design;














