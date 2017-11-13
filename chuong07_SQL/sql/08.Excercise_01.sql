-- 01. Cho biết tên công trình có kinh phí cao nhất
-- Lấy ra giá tiền cao nhất -> cost = Max
SELECT name,cost
FROM building
WHERE cost = 
	(
		SELECT MAX(cost) FROM building
	)
;

-- 02. Cho biết tên các kiến trúc sư(architest) và thiết kế các công trình(design) do Phòng dịch vụ sở xây dựng thi công (contructor),
-- vừa thiết kế các công trình do chủ thầy Lê Văn Sơn thi công
SELECT DISTINCT a.name
FROM architect AS a, building AS b ,contractor AS c, design AS d
WHERE a.id =  d.architect_id
	AND b.id = d.building_id
	AND c.id = b.contractor_id
	AND c.name = 'phong dich vu so xd'
	AND a.id IN
	(
		SELECT DISTINCT a.id
		FROM architect AS a, building AS b ,contractor AS c, design AS d
		WHERE a.id =  d.architect_id
			AND b.id = d.building_id
			AND c.id = b.contractor_id
			AND c.name = 'le van son'
	)
-- 03. Cho biết họ tên các công nhân có tham gia công trình ở Cần thơ nhưng không tham gia công trình ở Vĩnh long
