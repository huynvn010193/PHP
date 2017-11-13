-- 01. Hiển thị thù lao trung bình của từng kiến trúc sư
SELECT architect_id, AVG(benefit) 
FROM design
GROUP BY architect_id; -- Group lại theo từng ID của kiến trúc sư


-- 02. Hiển thị chi phí đầu tư cho các công trình ở mỗi TP
SELECT city, SUM(cost)
FROM building GROUP BY city;

-- 03. Tìm các công trình có chi phí đầu tư cho kiến trúc sư lớn hơn 50
SELECT building_id, SUM(benefit) AS total FROM design
GROUP BY building_id
HAVING total > 50;

-- 04. Tìm các thành phố có ít nhất là 1 kiến trúc sư tốt nghiệp
SELECT place, COUNT(id) AS total FROM architect
GROUP BY place
HAVING total >= 2;












