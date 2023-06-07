-- MySQL dump 10.13  Distrib 8.0.33, for Linux (x86_64)
--
-- Host: localhost    Database: onlineshop
-- ------------------------------------------------------
-- Server version	8.0.33-0ubuntu0.20.04.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `books` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `slug` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `category_id` int unsigned NOT NULL,
  `description` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `author` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `price_sale` double(8,2) NOT NULL,
  `quantity` int NOT NULL,
  `bought` int NOT NULL DEFAULT '0',
  `view_count` int NOT NULL DEFAULT '0',
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `publisher` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `yearOfPublication` varchar(10) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `totalPage` int DEFAULT NULL,
  `size` varchar(45) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `supplier` varchar(255) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `typeCover` varchar(45) COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'1TÔI VẼ - PHƯƠNG PHÁP TỰ HỌC VẼ TRUYỆN TRANH','toi-ve-phuong-phap-tu-hoc-ve-truyen-tranh','18936071672704',5,'2a11“Tôi vẽ với 300 trang sách bao gồm những kỹ năng cơ bản cần có của một họa sĩ truyện tranh, từ tạo hình nhân vật, thiết kế bối cảnh, biểu cảm, các kỹ thuật diễn họa cho đến luật phối cảnh. Đây là một cuốn cẩm nang tuyệt vời dành cho các bạn đang bắt đầu học vẽ truyện tranh. Những kiến thức này có thể không giúp các bạn vẽ đẹp ngay lập tức nhưng sẽ là nền tảng vững chắc giúp bạn hình thành các tiêu chuẩn chuyên nghiệp trong nghề và không mất thời gian tự mò mẫm. Phần minh họa cho các bài học cũng rất hấp dẫn và sáng tạo. Các tác giả đã sử dụng chính nhân vật và trang truyện của mình để làm rõ sự liên quan giữa lý thuyết và thực tế, tính ứng dụng rõ ràng của các kỹ thuật và quy trình sáng tác.','1Phan Vũ Linh','168235149020230424155130s64XPXPjkPwenbc45DevQBGyQS3xl5KRNuWQ19cg.png',1100.00,180.00,1100,0,0,1,'2023-04-24 08:02:12','2023-05-22 08:15:54','1','2',3,'4','5','6'),(2,'1TÔI VẼ - PHƯƠNG PHÁP TỰ HỌC VẼ TRUYỆN TRANH','toi-ve-phuong-phap-tu-hoc-ve-truyen-tranh-a2','18936071672704',5,'2a11“Tôi vẽ với 300 trang sách bao gồm những kỹ năng cơ bản cần có của một họa sĩ truyện tranh, từ tạo hình nhân vật, thiết kế bối cảnh, biểu cảm, các kỹ thuật diễn họa cho đến luật phối cảnh. Đây là một cuốn cẩm nang tuyệt vời dành cho các bạn đang bắt đầu học vẽ truyện tranh. Những kiến thức này có thể không giúp các bạn vẽ đẹp ngay lập tức nhưng sẽ là nền tảng vững chắc giúp bạn hình thành các tiêu chuẩn chuyên nghiệp trong nghề và không mất thời gian tự mò mẫm. Phần minh họa cho các bài học cũng rất hấp dẫn và sáng tạo. Các tác giả đã sử dụng chính nhân vật và trang truyện của mình để làm rõ sự liên quan giữa lý thuyết và thực tế, tính ứng dụng rõ ràng của các kỹ thuật và quy trình sáng tác.','1Phan Vũ Linh','168235149020230424155130s64XPXPjkPwenbc45DevQBGyQS3xl5KRNuWQ19cg.png',1100.00,180.00,1098,0,0,1,'2023-04-24 08:02:12','2023-05-16 00:10:18',NULL,NULL,NULL,NULL,NULL,NULL),(3,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap--ag','97860432925050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','168234863920230424150359oJdP5eESlBeCH7w4drUr1N6Wmk60VJjnz87PvXfH.png',150.00,120.00,100,0,6,1,'2023-04-24 08:03:59','2023-05-13 03:27:33',NULL,NULL,NULL,NULL,NULL,NULL),(4,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-l','97863043925050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','1682357587202304241733074SBNrTUJOqpqkucX7nQcy3jTfRiMmMKsDxux5W8c.png',150.00,120.00,98,2,0,1,'2023-04-24 08:03:59','2023-04-24 10:33:07',NULL,NULL,NULL,NULL,NULL,NULL),(5,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-b','97860443925050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','168234863920230424150359oJdP5eESlBeCH7w4drUr1N6Wmk60VJjnz87PvXfH.png',130.00,120.00,100,0,0,1,'2023-04-24 08:03:59','2023-04-24 08:03:59',NULL,NULL,NULL,NULL,NULL,NULL),(6,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-m','97586043925050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','1682357587202304241733074SBNrTUJOqpqkucX7nQcy3jTfRiMmMKsDxux5W8c.png',180.00,100.00,100,0,0,1,'2023-04-24 08:03:59','2023-04-24 10:33:07',NULL,NULL,NULL,NULL,NULL,NULL),(7,'1TÔI VẼ - PHƯƠNG PHÁP TỰ HỌC VẼ TRUYỆN TRANH','toi-ve-phuong-phap-tu-hoc-ve-truyen-tranh-p','189636071672704',5,'2a11“Tôi vẽ với 300 trang sách bao gồm những kỹ năng cơ bản cần có của một họa sĩ truyện tranh, từ tạo hình nhân vật, thiết kế bối cảnh, biểu cảm, các kỹ thuật diễn họa cho đến luật phối cảnh. Đây là một cuốn cẩm nang tuyệt vời dành cho các bạn đang bắt đầu học vẽ truyện tranh. Những kiến thức này có thể không giúp các bạn vẽ đẹp ngay lập tức nhưng sẽ là nền tảng vững chắc giúp bạn hình thành các tiêu chuẩn chuyên nghiệp trong nghề và không mất thời gian tự mò mẫm. Phần minh họa cho các bài học cũng rất hấp dẫn và sáng tạo. Các tác giả đã sử dụng chính nhân vật và trang truyện của mình để làm rõ sự liên quan giữa lý thuyết và thực tế, tính ứng dụng rõ ràng của các kỹ thuật và quy trình sáng tác.','1Phan Vũ Linh','168235149020230424155130s64XPXPjkPwenbc45DevQBGyQS3xl5KRNuWQ19cg.png',1100.00,180.00,1100,0,0,1,'2023-04-24 08:02:12','2023-04-24 10:30:06',NULL,NULL,NULL,NULL,NULL,NULL),(8,'1TÔI VẼ - PHƯƠNG PHÁP TỰ HỌC VẼ TRUYỆN TRANH','toi-ve-phuong-phap-tu-hoc-ve-truyen-tranh-i','189360716672704',5,'2a11“Tôi vẽ với 300 trang sách bao gồm những kỹ năng cơ bản cần có của một họa sĩ truyện tranh, từ tạo hình nhân vật, thiết kế bối cảnh, biểu cảm, các kỹ thuật diễn họa cho đến luật phối cảnh. Đây là một cuốn cẩm nang tuyệt vời dành cho các bạn đang bắt đầu học vẽ truyện tranh. Những kiến thức này có thể không giúp các bạn vẽ đẹp ngay lập tức nhưng sẽ là nền tảng vững chắc giúp bạn hình thành các tiêu chuẩn chuyên nghiệp trong nghề và không mất thời gian tự mò mẫm. Phần minh họa cho các bài học cũng rất hấp dẫn và sáng tạo. Các tác giả đã sử dụng chính nhân vật và trang truyện của mình để làm rõ sự liên quan giữa lý thuyết và thực tế, tính ứng dụng rõ ràng của các kỹ thuật và quy trình sáng tác.','1Phan Vũ Linh','168235149020230424155130s64XPXPjkPwenbc45DevQBGyQS3xl5KRNuWQ19cg.png',1100.00,180.00,1098,0,0,1,'2023-04-24 08:02:12','2023-04-24 10:30:06',NULL,NULL,NULL,NULL,NULL,NULL),(9,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-f1','978460439525050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','168234863920230424150359oJdP5eESlBeCH7w4drUr1N6Wmk60VJjnz87PvXfH.png',150.00,120.00,99,0,7,1,'2023-04-24 08:03:59','2023-05-13 04:29:32',NULL,NULL,NULL,NULL,NULL,NULL),(10,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-c1','978604354925050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','1682357587202304241733074SBNrTUJOqpqkucX7nQcy3jTfRiMmMKsDxux5W8c.png',150.00,120.00,97,2,0,1,'2023-04-24 08:03:59','2023-04-24 10:33:07',NULL,NULL,NULL,NULL,NULL,NULL),(11,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-b1','97860334392a5050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','168234863920230424150359oJdP5eESlBeCH7w4drUr1N6Wmk60VJjnz87PvXfH.png',130.00,120.00,99,0,3,1,'2023-04-24 08:03:59','2023-05-16 03:02:01',NULL,NULL,NULL,NULL,NULL,NULL),(12,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-a1','978604434392505a0',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','1682357587202304241733074SBNrTUJOqpqkucX7nQcy3jTfRiMmMKsDxux5W8c.png',180.00,100.00,98,0,2,1,'2023-04-24 08:03:59','2023-05-13 09:34:41',NULL,NULL,NULL,NULL,NULL,NULL),(13,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-b23','9786044392a5050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','168234863920230424150359oJdP5eESlBeCH7w4drUr1N6Wmk60VJjnz87PvXfH.png',130.00,120.00,99,0,0,1,'2023-04-24 08:03:59','2023-04-24 08:03:59',NULL,NULL,NULL,NULL,NULL,NULL),(14,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-m1','9758604392a5050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','1682357587202304241733074SBNrTUJOqpqkucX7nQcy3jTfRiMmMKsDxux5W8c.png',180.00,100.00,100,0,0,1,'2023-04-24 08:03:59','2023-04-24 10:33:07',NULL,NULL,NULL,NULL,NULL,NULL),(15,'1TÔI VẼ - PHƯƠNG PHÁP TỰ HỌC VẼ TRUYỆN TRANH','toi-ve-phuong-phap-tu-hoc-ve-truyen-tranh-p1','18963607a1672704',5,'2a11“Tôi vẽ với 300 trang sách bao gồm những kỹ năng cơ bản cần có của một họa sĩ truyện tranh, từ tạo hình nhân vật, thiết kế bối cảnh, biểu cảm, các kỹ thuật diễn họa cho đến luật phối cảnh. Đây là một cuốn cẩm nang tuyệt vời dành cho các bạn đang bắt đầu học vẽ truyện tranh. Những kiến thức này có thể không giúp các bạn vẽ đẹp ngay lập tức nhưng sẽ là nền tảng vững chắc giúp bạn hình thành các tiêu chuẩn chuyên nghiệp trong nghề và không mất thời gian tự mò mẫm. Phần minh họa cho các bài học cũng rất hấp dẫn và sáng tạo. Các tác giả đã sử dụng chính nhân vật và trang truyện của mình để làm rõ sự liên quan giữa lý thuyết và thực tế, tính ứng dụng rõ ràng của các kỹ thuật và quy trình sáng tác.','1Phan Vũ Linh','168235149020230424155130s64XPXPjkPwenbc45DevQBGyQS3xl5KRNuWQ19cg.png',1100.00,180.00,1100,0,0,1,'2023-04-24 08:02:12','2023-04-24 10:30:06',NULL,NULL,NULL,NULL,NULL,NULL),(16,'1TÔI VẼ - PHƯƠNG PHÁP TỰ HỌC VẼ TRUYỆN TRANH','toi-ve-phuong-phap-tu-hoc-ve-truyen-tranh-i1','1893607a16672704',5,'2a11“Tôi vẽ với 300 trang sách bao gồm những kỹ năng cơ bản cần có của một họa sĩ truyện tranh, từ tạo hình nhân vật, thiết kế bối cảnh, biểu cảm, các kỹ thuật diễn họa cho đến luật phối cảnh. Đây là một cuốn cẩm nang tuyệt vời dành cho các bạn đang bắt đầu học vẽ truyện tranh. Những kiến thức này có thể không giúp các bạn vẽ đẹp ngay lập tức nhưng sẽ là nền tảng vững chắc giúp bạn hình thành các tiêu chuẩn chuyên nghiệp trong nghề và không mất thời gian tự mò mẫm. Phần minh họa cho các bài học cũng rất hấp dẫn và sáng tạo. Các tác giả đã sử dụng chính nhân vật và trang truyện của mình để làm rõ sự liên quan giữa lý thuyết và thực tế, tính ứng dụng rõ ràng của các kỹ thuật và quy trình sáng tác.','1Phan Vũ Linh','168235149020230424155130s64XPXPjkPwenbc45DevQBGyQS3xl5KRNuWQ19cg.png',1100.00,180.00,1098,0,0,1,'2023-04-24 08:02:12','2023-04-24 10:30:06',NULL,NULL,NULL,NULL,NULL,NULL),(17,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-f1','9784a60439525050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','168234863920230424150359oJdP5eESlBeCH7w4drUr1N6Wmk60VJjnz87PvXfH.png',150.00,120.00,99,0,6,1,'2023-04-24 08:03:59','2023-05-13 03:27:33',NULL,NULL,NULL,NULL,NULL,NULL),(18,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-c1','978a604354925050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','1682357587202304241733074SBNrTUJOqpqkucX7nQcy3jTfRiMmMKsDxux5W8c.png',150.00,120.00,98,2,0,1,'2023-04-24 08:03:59','2023-04-24 10:33:07',NULL,NULL,NULL,NULL,NULL,NULL),(19,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-b1','9a78603343925050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','168234863920230424150359oJdP5eESlBeCH7w4drUr1N6Wmk60VJjnz87PvXfH.png',130.00,120.00,99,0,0,1,'2023-04-24 08:03:59','2023-04-24 08:03:59',NULL,NULL,NULL,NULL,NULL,NULL),(20,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-a1','a9786044343925050',2,'Sau khi quyển sách \"Trong phòng chờ với Bác sĩ Wynn\" tập 1 được đón nhận, Bác sĩ Wynn tiếp tục cho ra mắt \"Trong phòng chờ với Bác sĩ Wynn\" tập 2 với nhiều bài viết bổ sung về kiến thức y học thường thức, giúp quý vị độc giả có thêm kiến thức để bảo vệ sức khỏe của bản thân và gia đình. Với sức khỏe, đừng nghe tin đồn, hãy nghe bác sĩ và kiến thức y khoa.','BS Huỳnh Wynh Trần','1682357587202304241733074SBNrTUJOqpqkucX7nQcy3jTfRiMmMKsDxux5W8c.png',180.00,100.00,100,0,0,1,'2023-04-24 08:03:59','2023-04-24 10:33:07',NULL,NULL,NULL,NULL,NULL,NULL),(21,'aaaaaaaaaaaaa','aaaaaaaaaaaaa','1323wdrf',2,'aaaaa','aaaaaaaaaaaa','168422027220230516065752dTUmMSsoPxzybEnBNFgexvWPEtKph3Q6Tc0mI7kK.png',1.00,222.00,111,0,0,0,'2023-05-15 23:57:52','2023-05-15 23:57:52',NULL,NULL,NULL,NULL,NULL,NULL),(22,'sasá','sasa','11111',1,'11111111111111111','1111111111111','168476780720230522150327gicOBU0gwbAyCkKpiXHF2duKM1KA0a593pAMSlv7.png',11.00,11.00,11,0,0,1,'2023-05-22 08:03:27','2023-05-22 08:03:27',NULL,NULL,NULL,NULL,NULL,NULL),(23,'tttt','tttt','ttt',2,'ttttttttttttt','123','168476859920230522151639CHf3JQXGZDzf4cAarGpV9GGyTlwoqedYbmCpPMbl.png',123456.00,12347.00,1212,0,1,1,'2023-05-22 08:16:39','2023-05-22 08:17:04','234','456',789,'890','1234','12345');
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `slug` varchar(512) COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Toán học','toan-hoc','Toán học','2023-04-25 09:50:50','2023-05-13 05:30:20'),(2,'Văn học','van-hoc','Văn học','2023-04-25 09:50:50','2023-05-13 05:31:10'),(3,'Ngoại ngữ','ngoai-ngu','Ngoại ngữ','2023-04-24 05:37:52','2023-05-13 05:31:14'),(5,'Âm nhạc','am-nhac','Âm nhạc','2023-04-24 05:43:59','2023-05-13 05:31:19'),(13,'test','test','aaa','2023-05-16 03:04:34','2023-05-16 03:04:34');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2019_12_14_000001_create_personal_access_tokens_table',1),(5,'2023_04_21_192654_create_products_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `customer_notes` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `notes` longtext CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci,
  `amount` double(8,2) NOT NULL,
  `score_awards` double(8,2) NOT NULL DEFAULT '0.00',
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `order_id_unique` (`order_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders_detail` (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,'ORD2023050916392719X',2,'Admin','0981222999','admin@gmail.com','Q','DTM',NULL,360.00,0.00,1,'2023-05-09 09:41:50','2023-05-13 09:36:58'),(2,'ORD20230509164414MHU',2,'Admin','0981248222','admin@gmail.com','okela','Kaka',NULL,240000.00,0.00,3,'2023-05-09 09:44:28','2023-05-13 03:17:44'),(3,'ORD202305131111102SW',NULL,'0336666222','0336666222',NULL,'0336666222','0336666222',NULL,120000.00,0.00,3,'2023-05-13 04:11:15','2023-05-13 09:58:25'),(4,'ORD20230513163453VYD',6,'test','0987654321','test@gmail.com','Ha Noi','aaaa',NULL,560.00,0.00,1,'2023-05-13 09:35:11','2023-05-16 00:10:30'),(5,'ORD20230516100207WLY',9,'test','0981248920','test111@gmail.com','aaaa',NULL,NULL,120.00,0.00,1,'2023-05-16 03:02:15','2023-05-16 03:04:43');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_detail`
--

DROP TABLE IF EXISTS `orders_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders_detail` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `order_id` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `book_id` int unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `code` varchar(255) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `quantity` int NOT NULL DEFAULT '0',
  `price` double(8,2) NOT NULL,
  `price_sale` double(8,2) NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `order_id` (`order_id`),
  KEY `book_id` (`book_id`),
  CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_detail`
--

LOCK TABLES `orders_detail` WRITE;
/*!40000 ALTER TABLE `orders_detail` DISABLE KEYS */;
INSERT INTO `orders_detail` VALUES (1,'ORD20230509162835OGG',2,'1TÔI VẼ - PHƯƠNG PHÁP TỰ HỌC VẼ TRUYỆN TRANH','toi-ve-phuong-phap-tu-hoc-ve-truyen-tranh','18936071672704',2,1100.00,180.00,0,'2023-05-09 09:28:35','2023-05-09 09:28:35'),(2,'ORD20230509163150O1E',2,'1TÔI VẼ - PHƯƠNG PHÁP TỰ HỌC VẼ TRUYỆN TRANH','toi-ve-phuong-phap-tu-hoc-ve-truyen-tranh','18936071672704',2,1100.00,180.00,0,'2023-05-09 09:31:50','2023-05-09 09:31:50'),(3,'ORD20230509163205K6K',2,'1TÔI VẼ - PHƯƠNG PHÁP TỰ HỌC VẼ TRUYỆN TRANH','toi-ve-phuong-phap-tu-hoc-ve-truyen-tranh','18936071672704',2,1100.00,180.00,0,'2023-05-09 09:32:05','2023-05-09 09:32:05'),(4,'ORD2023050916392719X',2,'1TÔI VẼ - PHƯƠNG PHÁP TỰ HỌC VẼ TRUYỆN TRANH','toi-ve-phuong-phap-tu-hoc-ve-truyen-tranh','18936071672704',2,1100.00,180.00,1,'2023-05-09 09:39:27','2023-05-09 09:39:27'),(5,'ORD20230509164414MHU',4,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2','9786043925050',2,150000.00,120000.00,1,'2023-05-09 09:44:14','2023-05-09 09:44:14'),(6,'ORD20230513102736AGV',3,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2','9786043925050',1,150000.00,120000.00,0,'2023-05-13 03:27:36','2023-05-13 03:27:36'),(7,'ORD20230513102903EPJ',3,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2','9786043925050',1,150000.00,120000.00,0,'2023-05-13 03:29:03','2023-05-13 03:29:03'),(8,'ORD20230513102926G7F',3,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2','9786043925050',1,150000.00,120000.00,0,'2023-05-13 03:29:26','2023-05-13 03:29:26'),(9,'ORD20230513103311GDC',3,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2','9786043925050',1,150000.00,120000.00,0,'2023-05-13 03:33:11','2023-05-13 03:33:11'),(10,'ORD20230513110306P6U',3,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2','9786043925050',1,150000.00,120000.00,0,'2023-05-13 04:03:06','2023-05-13 04:03:06'),(11,'ORD20230513110558VT4',3,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2','9786043925050',1,150000.00,120000.00,0,'2023-05-13 04:05:58','2023-05-13 04:05:58'),(12,'ORD20230513110608IVM',3,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2','9786043925050',1,150000.00,120000.00,0,'2023-05-13 04:06:08','2023-05-13 04:06:08'),(13,'ORD20230513110612RUH',3,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2','9786043925050',1,150000.00,120000.00,0,'2023-05-13 04:06:12','2023-05-13 04:06:12'),(14,'ORD20230513110758DX9',3,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2','9786043925050',1,150000.00,120000.00,0,'2023-05-13 04:07:58','2023-05-13 04:07:58'),(15,'ORD202305131109541GD',3,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2','9786043925050',1,150000.00,120000.00,0,'2023-05-13 04:09:54','2023-05-13 04:09:54'),(16,'ORD202305131111102SW',3,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2','9786043925050',1,150000.00,120000.00,0,'2023-05-13 04:11:10','2023-05-13 04:11:10'),(17,'ORD20230513163453VYD',19,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-b1','9a78603343925050',1,130.00,120.00,1,'2023-05-13 09:34:53','2023-05-13 09:34:53'),(18,'ORD20230513163453VYD',13,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-b23','9786044392a5050',1,130.00,120.00,1,'2023-05-13 09:34:53','2023-05-13 09:34:53'),(19,'ORD20230513163453VYD',10,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-c1','978604354925050',1,150.00,120.00,1,'2023-05-13 09:34:53','2023-05-13 09:34:53'),(20,'ORD20230513163453VYD',12,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-a1','978604434392505a0',2,180.00,100.00,1,'2023-05-13 09:34:53','2023-05-13 09:34:53'),(21,'ORD20230516100207WLY',11,'TRONG PHÒNG CHỜ VỚI BÁC SĨ WYNN - TẬP 2','trong-phong-cho-voi-bac-si-wynn-tap-2-b1','97860334392a5050',1,130.00,120.00,1,'2023-05-16 03:02:07','2023-05-16 03:02:07');
/*!40000 ALTER TABLE `orders_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(512) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Customer 1','https://i1-giaitri.vnecdn.net/2023/05/13/Van-dong-vien-Nguyen-Thi-Oanh-3466-6150-1683964583.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=6GrfrM5c0MarRXasuZRbHg','customer1@gmail.com','customer',NULL,'TP. Bình Dương','$2y$10$2lwnPMur2GB7NeR.jqYjXuHk0/HxOEE/dtJ8AKY.s4cMWULsGs03e',NULL,NULL,'2023-05-13 02:40:25'),(2,'Administrator',NULL,'admin@gmail.com','admin',NULL,'Hà Nội','$2y$10$4edleQ7FIcS8PthADtoE.uiy3SBXgEcRg0cNNLMbJKRudJkVsRMC2','yqF5bdpTRfiGdFYXb49WlUyCZxS02vD8ZgnVVt4NcAaRwokwUPjmYkpAX7Bc',NULL,'2023-05-09 10:29:26'),(5,'Minh Anh',NULL,'hoangminhanh@gmail.com','customer',NULL,NULL,'$2y$10$lcyEs2IcCQHnyewGWz6MN.mQfQzX7S2aRejuXY8GeOZtsaVTwfgrm','L21XpE2uRkg07Fml7GQFnlK4T9tcGEP1aDg0daPAT8CfLF9IJo2DeAi2pGjx','2023-05-13 07:51:24','2023-05-13 07:51:24'),(6,'test',NULL,'test@gmail.com','customer',NULL,NULL,'$2y$10$X9VVyCbukBkFXks4go52IOGhamv27aaSXJ94lJJs9ETdmrEKFuINu','xqm6Q0vArNXe83DqAOow6Q1M9tDOoQwXiRXgomPkEoXZ4t0Ni9BhLX5ZwQC8','2023-05-13 09:34:29','2023-05-13 09:34:29'),(7,'test1',NULL,'test1@gmail.com','customer',NULL,NULL,'$2y$10$ZEY7WdI18Hkdb8wkfnwC7umFMHZ5YELudHZ.ALjQmhedsU3EKS9zC','Q1h1wPxrXV3vSAqhj0iagTWTDXzfhQjWaLpZfgnTXRzATQAARnCWM9roUzDL','2023-05-13 09:52:25','2023-05-13 09:52:25'),(8,'admin1',NULL,'admin1@gmail.com','customer',NULL,NULL,'$2y$10$S4MOx380VYAe1ZZ2uncvfebBFiGdw1PcUHit45s0nOa.6ql5CYhVq','wT4oIpOjU71tdq74mulxCXIHzY0PpVcdHQo3K62vXq27batgiEyXOajA0ZM4','2023-05-14 07:16:34','2023-05-14 07:16:34'),(9,'test',NULL,'test111@gmail.com','customer',NULL,'aaaa','$2y$10$cSR/YpNaXNCdkik3RHYNueD6HP9KH5hQvd6zpt/YYPyCYckSoSDFW','PbkIqj3IcrTX9CyMnRj6E6Q9R3oNf9sFpZ53dnOcRQUKI8P10fWcfu9hbzWG','2023-05-16 03:01:53','2023-05-16 03:01:53');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wishlists`
--

DROP TABLE IF EXISTS `wishlists`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `wishlists` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `book_id` int unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `wishlists_ibfk_1` (`user_id`),
  KEY `wishlists_ibfk_2` (`book_id`),
  CONSTRAINT `wishlists_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `wishlists_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wishlists`
--

LOCK TABLES `wishlists` WRITE;
/*!40000 ALTER TABLE `wishlists` DISABLE KEYS */;
/*!40000 ALTER TABLE `wishlists` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-07 22:26:17
