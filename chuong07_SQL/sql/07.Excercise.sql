-- 01. Hãy cho biết tên và địa chỉ công trình do công ty xây dựng số 6 thi công

SELECT b.name, b.address, c.name
FROM building AS b, contractor AS c
WHERE b.contractor_id = c.id AND c.name = 'cty xd so 6';

-- 02. Tìm tên và địa chỉ liên lạc của các chủ thầu thi công công trình ở Cần Thơ do kiến trúc sư
-- Lê Kim Dung thiết kế
SELECT c.name, c.address
FROM contractor AS c, building AS b, design AS d, architect AS a
WHERE b.contractor_id = c.id AND d.architect_id = a.id AND b.id = d.building_id AND a.name = 'le kim dung'
AND b.city = 'can tho';

-- 03. Hãy cho biết , nơi tốt nghiệp của các kiến trúc sư đã thiết kế công trình Khách Sạn Quốc Tế ở Cần Thơ
SELECT a.place
FROM architect AS a, design AS d, building AS b
WHERE a.id = d.architect_id AND d.building_id = b.id
	AND b.name = 'khach san quoc te'
	AND b.city = 'can tho';
-- 04. Cho biết họ tên, năm sinh, năm vào nghề của các công nhân có chuyên môn hàn hoặc điện (worker) đã tham gia các
-- công trình mà chủ thầu Lê Văn Sơn đã trúng.
SELECT wr.name, wr.birthday, wr.year
FROM contractor AS c, building AS b, work AS w, worker AS wr
WHERE wr.id = w.worker_id
	AND w.building_id = b.id 
	AND b.contractor_id = c.id
	AND c.name = 'le van son'
	AND (wr.skill = 'han' or wr.skill = 'dien');


-- 05. Những công nhân nào(worker) đã bắt đầu tham gia công trình Khách sạn Quốc tế(building) ở Cần Thơ trong giai đoạn
-- từ ngày 15/12/1994 đến 31/12/1994(work) số ngày tham gia là bao nhiêu(work) ?
SELECT wr.name, w.total
FROM building AS b , work AS w, worker AS wr
WHERE b.id = w.building_id
	AND w.worker_id = wr.id
	AND b.name = 'khach san quoc te'
	AND b.city = 'can tho'
	AND w.date BETWEEN '1994/12/15' AND '1994/12/31';
-- 06. Cho biết họ tên và năm sinh của các kiến trúc sư đã tốt nghiệp ở TPHCM và thiết kế ít nhất 1 
-- công trình có kinh phí đầu tư trên 400 triệu đồng
SELECT DISTINCT a.name, a.birthday
FROM building AS b, design AS d, architect AS a
WHERE b.id = d.building_id
	AND d.architect_id = a.id
	AND a.place = 'tp hcm'
	AND b.cost > '400';
	