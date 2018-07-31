-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 04, 2018 at 04:06 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlns`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

DROP TABLE IF EXISTS `chitiethoadon`;
CREATE TABLE IF NOT EXISTS `chitiethoadon` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_hoadon` int(10) NOT NULL,
  `id_sach` int(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `gia` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `id_hoadon` (`id_hoadon`),
  KEY `id_sach` (`id_sach`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id`, `id_hoadon`, `id_sach`, `soluong`, `gia`, `created_at`, `updated_at`) VALUES
(1, 2, 2, 2, 80000, '2018-05-31 08:47:55', '2018-05-31 08:47:55'),
(2, 2, 3, 1, 67000, '2018-05-31 08:47:55', '2018-05-31 08:47:55'),
(3, 3, 2, 2, 80000, '2018-05-31 08:49:34', '2018-05-31 08:49:34'),
(4, 3, 3, 1, 67000, '2018-05-31 08:49:34', '2018-05-31 08:49:34'),
(5, 4, 2, 1, 80000, '2018-05-31 08:56:00', '2018-05-31 08:56:00'),
(6, 4, 1, 1, 95000, '2018-05-31 08:56:00', '2018-05-31 08:56:00'),
(7, 5, 4, 1, 109000, '2018-05-31 09:03:13', '2018-05-31 09:03:13'),
(8, 6, 2, 1, 80000, '2018-05-31 09:05:56', '2018-05-31 09:05:56'),
(9, 7, 4, 1, 109000, '2018-05-31 09:09:18', '2018-05-31 09:09:18'),
(10, 8, 13, 1, 128000, '2018-05-31 09:21:28', '2018-05-31 09:21:28'),
(11, 9, 1, 1, 95000, '2018-05-31 09:25:57', '2018-05-31 09:25:57'),
(12, 10, 3, 1, 67000, '2018-05-31 09:28:17', '2018-05-31 09:28:17'),
(13, 11, 2, 1, 80000, '2018-05-31 09:31:08', '2018-05-31 09:31:08'),
(14, 12, 4, 1, 109000, '2018-05-31 09:32:23', '2018-05-31 09:32:23'),
(15, 13, 2, 1, 80000, '2018-05-31 09:40:31', '2018-05-31 09:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

DROP TABLE IF EXISTS `hoadon`;
CREATE TABLE IF NOT EXISTS `hoadon` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `id_khachhang` int(10) NOT NULL,
  `ngaydat` date NOT NULL,
  `tongtien` bigint(20) NOT NULL,
  `thanhtoan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_khachhang` (`id_khachhang`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`id`, `id_khachhang`, `ngaydat`, `tongtien`, `thanhtoan`, `created_at`, `updated_at`) VALUES
(1, 4, '2018-05-31', 227000, 'ATM', '2018-05-31 08:45:28', '2018-05-31 08:45:28'),
(2, 5, '2018-05-31', 227000, 'ATM', '2018-05-31 08:47:55', '2018-05-31 08:47:55'),
(3, 6, '2018-05-31', 227000, 'ATM', '2018-05-31 08:49:34', '2018-05-31 08:49:34'),
(4, 8, '2018-05-31', 175000, 'ATM', '2018-05-31 08:56:00', '2018-05-31 08:56:00'),
(5, 11, '2018-05-31', 109000, 'COD', '2018-05-31 09:03:13', '2018-05-31 09:03:13'),
(6, 12, '2018-05-31', 80000, 'COD', '2018-05-31 09:05:56', '2018-05-31 09:05:56'),
(7, 13, '2018-05-31', 109000, 'COD', '2018-05-31 09:09:18', '2018-05-31 09:09:18'),
(8, 14, '2018-05-31', 128000, 'COD', '2018-05-31 09:21:27', '2018-05-31 09:21:27'),
(9, 15, '2018-05-31', 95000, 'COD', '2018-05-31 09:25:57', '2018-05-31 09:25:57'),
(10, 16, '2018-05-31', 67000, 'COD', '2018-05-31 09:28:17', '2018-05-31 09:28:17'),
(11, 17, '2018-05-31', 80000, 'COD', '2018-05-31 09:31:08', '2018-05-31 09:31:08'),
(12, 18, '2018-05-31', 109000, 'COD', '2018-05-31 09:32:22', '2018-05-31 09:32:22'),
(13, 19, '2018-05-31', 80000, 'ATM', '2018-05-31 09:40:31', '2018-05-31 09:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

DROP TABLE IF EXISTS `khachhang`;
CREATE TABLE IF NOT EXISTS `khachhang` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `ten` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sdt` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ghichu` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`id`, `ten`, `gioitinh`, `email`, `diachi`, `sdt`, `ghichu`, `created_at`, `updated_at`) VALUES
(1, 'Tấn Phan', 'nam', 'tanphan0805@gmail.com', 'CMT8', '01638082216', 'nhanh', '2018-05-24 17:20:36', '2018-05-24 17:20:36'),
(2, 'Phan Thị Kim Phương', 'nữ', 'kimphuong.bww92@gmail.com', 'Binh Son', '+841627787960', 'giao nhanh cho chị', '2018-05-24 17:21:23', '2018-05-24 17:21:23'),
(3, 'Tấn Phan', 'nam', 'tanphan0805@gmail.com', 'CMT8', '01638082216', 'nhanh', '2018-05-29 04:22:59', '2018-05-29 04:22:59'),
(4, 'Phan Văn Tấn', 'nam', 'tanteo0805@gmail.com', '457, CMT8', '0123456789', 'giao nhanh lên', '2018-05-31 08:45:28', '2018-05-31 08:45:28'),
(5, 'Phan Văn Tấn', 'nam', 'tanteo0805@gmail.com', '457, CMT8', '0123456789', 'giao nhanh lên', '2018-05-31 08:47:55', '2018-05-31 08:47:55'),
(6, 'Phan Văn Tấn', 'nam', 'tanteo0805@gmail.com', '457, CMT8', '0123456789', 'nhanh', '2018-05-31 08:49:34', '2018-05-31 08:49:34'),
(7, 'aaa', 'nam', 'tanphan0805@gmail.com', 'a', '+841627787960', '1', '2018-05-31 08:54:34', '2018-05-31 08:54:34'),
(8, 'Thùy', 'nữ', 'kimthuy@gmail.com', 'QN', '1234', 'a', '2018-05-31 08:56:00', '2018-05-31 08:56:00'),
(9, 'b', 'nam', 'kimphuong.bww92@gmail.com', 'Binh Son', '+841627787960', 'b', '2018-05-31 08:59:10', '2018-05-31 08:59:10'),
(10, 'n', 'nam', 'tanphan0805@gmail.com', 'n', 'n', 'n', '2018-05-31 08:59:41', '2018-05-31 08:59:41'),
(11, 'Tấn Phan', 'nam', 'tanteo0805@gmail.com', 't', 't', 't', '2018-05-31 09:03:13', '2018-05-31 09:03:13'),
(12, 'OK', 'nam', 'kimphuong.bww92@gmail.com', 'Binh Son', '+841627787960', 'ok', '2018-05-31 09:05:56', '2018-05-31 09:05:56'),
(13, 'kaka', 'nam', 'kimphuong.bww92@gmail.com', 'Binh Son', '+841627787960', 'ak', '2018-05-31 09:09:17', '2018-05-31 09:09:17'),
(14, 'Tấn Phan', 'nam', 'teo0805@gmail.com', 't', 't', 't', '2018-05-31 09:21:27', '2018-05-31 09:21:27'),
(15, 's', 'nam', 's@s', 's', 's', 's', '2018-05-31 09:25:57', '2018-05-31 09:25:57'),
(16, 'f', 'nam', 'aaa@gmail.com', 'f', 'f', NULL, '2018-05-31 09:28:17', '2018-05-31 09:28:17'),
(17, 'h', 'nam', 'aaa@gmail.com', 'h', 'h', NULL, '2018-05-31 09:31:08', '2018-05-31 09:31:08'),
(18, 'kaka', 'nam', 'kimphuong.bww92@gmail.com', 'Binh Son', '+841627787960', NULL, '2018-05-31 09:32:22', '2018-05-31 09:32:22'),
(19, 'Nguyễn Xuân Tân', 'nữ', 'xuantan97@gmail.com', 'HCM', '123456890', 'giao nhanh cho anh', '2018-05-31 09:40:31', '2018-05-31 09:40:31');

-- --------------------------------------------------------

--
-- Table structure for table `loaisach`
--

DROP TABLE IF EXISTS `loaisach`;
CREATE TABLE IF NOT EXISTS `loaisach` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisach`
--

INSERT INTO `loaisach` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Sách Tiếng Anh', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Sách Kinh Tế', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Sách Văn Học', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Sách Thiếu Nhi', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Sách Giáo Khoa', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Sách Tham Khảo', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Sách kinh dị', '2018-05-29 16:24:37', '2018-05-29 16:24:37'),
(8, 'Truyện Tranh', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Sách Chính Trị', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Sách Kinh Doanh', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Sách ngôn tình', '2018-05-31 09:49:19', '2018-05-31 09:49:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

DROP TABLE IF EXISTS `sach`;
CREATE TABLE IF NOT EXISTS `sach` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_loai` int(10) NOT NULL,
  `mota` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `gia` bigint(20) NOT NULL,
  `hinh` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_loai` (`id_loai`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`id`, `name`, `id_loai`, `mota`, `gia`, `hinh`, `created_at`, `updated_at`) VALUES
(1, 'About me', 1, 'Chia sẻ bảng thân bằng tiếng anh', 95000, 'tu-hoc-giao-tiep-tieng-anh.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'Basic English Grammar', 1, 'Đầy đủ các kiến thức căn bản cho người mới bắt đầu và những người đã biết có thể ôn lại', 80000, 'basic-english-grammar.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'Tiếng Anh 6', 1, 'Cuốn sách được chuẩn hóa theo khung chương trình của Bộ Giáo Dục. giúp các em rèn luyện các kĩ năng cơ bản nghe, nói, đọc viết bằng giọng phát âm chuẩn và các bài tập giúp các em rèn luyện để nâng cao các kĩ năng', 67000, 'tieng-anh-6.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Tự học tiếng anh cấp tốc', 1, ' Tự học tiếng Anh cấp tốc cho người mới bắt đầu là cuốn sách áp dụng phương thức học hoàn toàn khác so với sách truyền thồng, giúp bạn làm quen với vốn từ vựng tiếng Anh căn bản nhất, các mẫu câu và tình huống từ đơn giản đến phức tạp cho người mới học.\r\n\r\n* Phương pháp mới giúp người học đọc hiệu quả hơn, có phiên âm tiếng Việt giúp phát âm dễ hơn – nhanh hơn. Nên kết hợp với nghe đĩa CD để đảm bảo phát âm chuẩn nhất.', 109000, 'tu-hoc-tieng-anh-cap-toc.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Giải thích ngữ pháp Tiếng Anh', 1, 'Sách Ngữ Pháp Tiếng Anh do chúng tôi biên soạn trước đây, nay đã cũ, không còn phù hợp với trình độ ngày càng cao của người học và phương pháp giảng dạy mới của Bộ Giáo dục và Đào tạo, do đó chúng tôi biên soạn Giải thích NGỮ PHÁP TIÊNG ANH nhằm đáp ứng nhu cầu của người học.\r\n\r\nSách được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao. Nội dung các chương được biên soạn dựa trên ngừ pháp tiếng Anh hiện đại, giải thích cặn kẽ, rõ ràng các cách dùng và qui luật mà người học cần nắm vững; đồng thời chỉ ra những quy luật khác nhau giữa tiếng Anh của người Anh (British English) và tiếng Anh của người Mỹ (American English).', 80000, 'giai-thich-ngu-phap.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Advance Grammar in Use', 1, 'Cuốn Oxford Practice Grammar Advanced gồm 17 Unit, mỗi Unit là 1 chủ điểm ngữ pháp quan trọng dành cho bạn để rèn luyện ngữ pháp. Trước khi làm bài tập người học có thể đọc qua phần giải thích và ví dụ cho từng điểm ngữ pháp. Đáp án cho các bài tập và Test được cung cấp trong phần cuối của sách.', 130000, 'ngu-phap-tieng-anh-nang-cao.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Bài tập trắc nghiêm Tiếng Anh 5', 1, 'Cuốn sách Bài Tập Trắc Nghiệm Tiếng Anh Lớp 5 - Tập 2 được biên soạn dựa trên nội dung bám sát sách giáo khoa Tiếng Anh 5, Tập 2 nhằm mục đích hỗ trợ và khuyến khích quá trình tự học, tự ôn luyện của học sinh.\r\n\r\nCuốn sách bao gồm 10 đơn vị bài tập theo Chương trình sách giáo khoa và mỗi đơn vị được chia 3 Lesson theo sách giáo khoa, mỗi bài Lesson gồm các bài tập trắc nghiệm giúp học sinh luyện về ngữ âm, từ vựng, ngữ pháp và các kỹ năng trong tiếng Anh từ cơ bản đến nâng cao.\r\n\r\nCuốn sách sẽ cung cấp cho học sinh luyện tập lại những kiến thức quan dưới các dạng bài tập trắc nghiệm nhằm giúp học sinh có thể hiểu sâu và ghi nhớ kiến thức đã được học trên lớp và có nền tảng để giao tiếp tiếng Anh tốt.', 57000, 'bai-tap-trac-nghiem-tieng-anh-lop-5.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Phương pháp học TIếng Anh', 1, 'Học Tiếng Anh dành tặng bạn đọc quyển sách Phương pháp học tiếng Anh của giáo sư Nguyễn Quốc Hùng, người thầy tâm huyết với sự nghiệp giáo dục ngoại ngữ từng biên soạn rất nhiều sách phục vụ giảng dạy và học tiếng Anh.\r\n\r\nBạn đọc chỉ cần thực hiện theo đúng thể lệ và quay lại trang này để xem kết quả. Chúng tôi sẽ liên lạc với bạn đọc may mắn qua Facebook hoặc Google+ được cung cấp trong quá trình tham gia chương trình tặng sách này.', 126000, 'phuong-phap-hoc-tieng-anh.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, '3000 Từ vựng Tiếng Anh', 1, 'Chắc hẳn, phần lớn những người học đều đã biết về 3000 từ vựng tiếng Anh thông dụng. Nói về con số 3000 thì nhiều nhà ngôn ngữ đã khẳng định về tính xác thực rằng: Với 3000 từ vựng thông dụng này bạn có thể đọc hiểu được đến 80% những văn bản bằng tiếng Anh trên toàn thế giới.', 200000, '3000-tu-vung.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Tự học đàm thoại Tiếng Anh', 1, 'Cuốn sách giúp người đọc tự tin trong đàm thoại với đối tác bằng tiếng anh', 312000, 'tu-hoc-dam-thoai-tieng-anh.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Tiếng Anh chuyên ngành du lịch', 1, 'Đầy đủ từ vựng và ngữ pháp trong lĩnh vực du lịch', 98000, 'tu-hoc-tieng-anh-chuyen-nganh-du-lich.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Tự học nghe nói TIếng Anh', 1, 'Với mỗi chủ đề, bạn được làm quen về từ vựng, cách phát âm, cấu trúc ngữ pháp thường dùng. Đĩa CD đính kèm với sách là một tài liệu hay và thiết thực để người học làm quen với phát âm, ngữ điệu và thực hành mỗi ngày.', 83000, 'sach-tieng-anh-giao-tiep-co-ban.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Siêu kinh tế học hài hước', 2, 'Kinh tế học hài hước - cuốn sách bán chạy nhất theo bình chọn của New York Times - với hơn 4 triệu bản được dịch ra 35 thứ tiếng, thực sự là cuộc cách mạng trong tư duy khiến bất cứ ai từng đọc qua cũng phải thay đổi cách nhìn nhận về thế giới xung quanh.\r\nGiờ đây, Steven D. Levitt và Stephen J. Dubner cùng cuốn Siêu kinh tế học hài hước sẽ lại một lần nữa mở ra cho những độc giả quen thuộc cũng như lần đầu biết đến họ một cái nhìn mới sâu sắc hơn, dí dỏm hơn và cũng đầy ngạc nhiên hơn.\r\n\r\nSiêu kinh tế học hài hước - BÙNG NỔ với những câu hỏi đáng suy ngẫm song không kém phần thú vị:', 128000, 'sieu-kinh-te-hoc-hai-huoc.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Bài giảng kinh tế vĩ mô', 2, 'Mô hình tổng quan kinh tế vĩ mô', 46000, 'bai-giang-kinh-te-vi-mo.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Kinh tế quốc tế', 2, 'Kinh tế quốc tế cho sinh viên ngoại thương', 100000, 'kinh-te-quoc-te.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Đầu tư bất động sản', 2, 'Với kinh nghiệm và bài học thực tế từ các nhà đầu tư bất động sản hàng đầu thế giới, nội dung cuốn sách chỉ cho bạn con đường gần nhất, dễ dàng nhất để thành công trong kinh doanh bất động sản cỡ nhỏ. Bạn sẽ khám phá ra cách thức hoàn hảo nhất để kinh doanh bất động sản mà không cần nguốn tài chính lớn, cách đọc hiểu thị trường và mua bất động sản vào thời điểm hợp lý nhất…\r\n\r\nBằng viêc cung cấp tất cả thông tin và chiến lược cần thiết trong đầu tư bất động sản, đây là cuốn cẩm nang thiết thực và toàn diện nhất trong sự nghiệp kinh doanh bất động sản của bạn. Một cuốn sách hữu ích giúp bạn có thể thu lợi nhuận tối đa trong kinh doanh bất động sản…', 245000, 'dau-tu-bat-dong-san.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Quản trị Doanh Nghiệp ', 2, 'uốn sách cung cấp cho bạn đọc những kiến thức về quản trị doanh nghiệp nói chung và quản trị doanh nghiệp trong nền kinh tế thị trường định hướng xã hội chủ nghĩa ở nước ta nói riêng; như: tổng quan về doanh nghiệp; cơ cấu tổ chức và quản trị doanh nghiệp; môi trường hoạt động của doanh nghiệp; quản lý nhà nước đối với doanh nghiệp; cơ chế quản lý của nhà nước đối với doanh nghiệp; nội dung quản lý nhà nước đối với doanh nghiệp...\r\n', 320000, 'quan-tri-doanh-nghiep.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Kinh tế lượng', 2, '\"Giáo trình lý thuyết xác suất và thống kê toán\" được biên soạn cho sinh viên kinh tế sau khi đã được trang bị các kiến thức cơ bản về toán cao cấp bao gồm giải tích cổ điển và đại số tuyến tính.\r\n\r\n \r\n\r\nMục đích của giáo trình là trang bị cho các nhà kinh tế tương lai phần đảm bảo về toán học cho quá trình thu thập và xử lý thông tin kinh tế - xã hội sẽ được tiếp tục nghiên cứu trong các giáo trình khác như lý thuyết thống kê, dự báo kinh tế, lý thuyết tài chính...nó cũng chuẩn bị các kiến thức cho sinh viên tiếp thu các giáo trình tóa kinh tế sẽ nghiên cứu ở các năm sau như Kinh tế lượng, lý thuyết phục vụ công công, lý thuyết quản lý dự trữ...', 83000, 'kinh-te-luong.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Giáo trình kinh tế phát triển', 2, 'rong thời gian qua, trên thế giới và Việt Nam đã có nhiều tác giả viết về kinh tế phát triển với những góc nhìn khác nhau, tuy nhiên trên thực tế, sinh viên và những độc giả muốn tìm hiểu về kinh tế phát triển vẫn còn khó khăn để hiểu được một cách tường tận những nguyên lý của phát triển. Do đó, tác giả nỗ lực giới thiệu một cách tiếp cận phân tích kinh tế phát triển theo hướng từ đơn giản rồi mở rộng kiến thức với trình độ cao hơn, từ nguồn gốc lý thuyết rồi gắn kết với minh họa trong thực tiễn trên thế giới và Việt Nam nhằm giúp người đọc tiếp cận môn học này dễ dàng hơn.', 92000, 'Sach-Giao-Trinh-Kinh-Te-Phat-Trien.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Kín tế vĩ mô', 2, 'uốn sách trình bày khá đầy đủ các vấn đề về vi mô, tuy nhiên chưa có độ sâu cũng như chưa phân tích được vấn đề. Tôi thấy kinh tế vi mô là một môn học rất thú vị và hấp dẫn, nó cung cấp cho tôi một cái nhìn tương đối về những vấn đề kinh tế mà hàng ngày tôi vẫn được nghe, được nhìn,…\r\nTuy nhiên, cuốn sách thực sự không đáp ứng được nhu cầu của tôi, tôi thực sự hơi thất vọng. Có một vài cuốn sách về kinh tế khá hay như Nguyên lý kinh tế học của Mankiw, Kinh tế học của Samuelson hay Kinh tế học của David Begg, những cuốn này đào sâu vấn đề, giải thích cụ thể và sinh động, tuy nhiên vì sử dụng nền kinh tế Mỹ để là ví dụ cho nên không thể hiểu một cách trọn vẹn.\r\nThật đáng tiếc!', 72000, 'kinh-te-vi-mo.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Ông già và biển cả', 3, 'Ông già và Biển cả (tên tiếng Anh: The Old Man and the Sea) là một tiểu thuyết ngắn được Ernest Hemingway viết ở Cuba năm 1951 và xuất bản năm 1952. Tác phẩm là truyện ngắn dạng viễn tưởng và là một trong những đỉnh cao trong sự nghiệp sáng tác của nhà văn, đoạt giải Pulitzer năm 1953.', 47000, 'ong-gia-va-bien-ca.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Gió lạnh đầu mùa', 3, 'n Học Trong Nhà Trường - Thạch Lam: Gió Lạnh Đầu Mùa\r\nGió lạnh đầu mùa\r\nĐứa con đầu lòng\r\nBắt đầu\r\nNhà mẹ Lê\r\nMột cơn giận\r\nTiếng chim kêu\r\nNắng trong vườn\r\nHai đứa trẻ\r\nĐứa con\r\nTrong bóng tối của buổi chiều\r\nCuốn sách bỏ quên...', 84000, 'gio-lanh-dau-mua-kho-nho_1_1.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Lá chắn thép', 3, 'Truyện ký “Lá chắn thép” của nhà văn Diệp Hồng Phương viết về lực lượng An ninh tỉnh Tây Ninh và An ninh Trung ương Cục miền Nam, vừa được Nhà xuất bản Công an nhân dân phát hành nhân dịp kỷ niệm 70 năm Ngày truyền thống Công an nhân dân Việt Nam (19/8/1945 – 19/8/2015).\r\n', 55000, '6-lachan3672.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Ruồi Trâu', 3, 'Cả cuốn sách chứa chan một thế giới quan nhân đạo, lòng yêu và quí trọng phẩm chất con người. Từng nhân vật trong cuốn truyện, từ Ruồi Trâu đến những nhân vật phụ, những bạn chiến đấu gần và xa của anh, không nhân vật nào là không có cá tính sâu sắc của mình. Bản thân nhân vật Ruồi Trâu không phải là một nhân vật cứng đờ, mà ở anh người ta thấy rõ người cách mạng cũng là con người giàu tình, giàu cảm nhất. Ruồi trâu lấy bối cảnh từ phong trào cách mạng của nước Ý. Tưởng chừng đề tài về chiến tranh, cách mạng sẽ rất khô khan nhưng Ruồi Trâu không hề như vậy. Đó là bài học về sự dũng cảm, quyết tâm, về tính nhân văn và cả về tình yêu cao đẹp.', 47000, 'ruoi-trau.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, '10 vạn câu hỏi vì sao', 4, 'uổi thơ là khoảng thời gian đẹp nhất trong cuộc đời mỗi người. Ở lứa tuổi này luôn tràn đầy hy vọng, ước mơ, cùng những ngây thơ trong sáng buổi ban đầu. Đứng trước thế giới với bao điều kỳ diệu, mang trong mình sự tò mò, khát vọng tìm hiểu, câu nói thường thấy nhất ở trẻ là “Vì sao?”. Để có thể trả lời chính xác câu hỏi của trẻ, không phải là việc đơn giản. Các nghiên cứu cho thấy, sự phát triển của bộ não trẻ diễn ra nhanh nhất vào tuổi 13 trở về trước, là một phụ huynh, khi không mang lại cho trẻ cơ hội suy nghĩ, tìm hiểu, có thể bạn sẽ phải rất ân hận! Thế giới ngày nay phát triển nhanh chóng, kho tàng kiến thức là vô hạn, luôn được đổi mới với tốc độ chóng mặt.', 91000, '10_van-cac_hien_tuong_tu_nhien.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Bách khoa tri thức dành cho thiếu nhi', 4, 'Vui mà học, học mà vui. Tranh minh họa sinh động, thú vị; Kiến thức phong phú, đặc sắc. Khám phá thế giới rộng lớn, Thỏa mãn ham muốn học hỏi. Vui vẻ tích lũy tri thức, Mở toang cánh cửa trí tuệ.', 100000, 'bach-khoa-tri-thuc.jpg', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

DROP TABLE IF EXISTS `slide`;
CREATE TABLE IF NOT EXISTS `slide` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `hinh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `hinh`) VALUES
(1, 'banner1.jpg'),
(2, 'banner2.jpg'),
(3, 'banner3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quyen` int(11) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `quyen`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'Ku Tấn', 'kutan0805@gmail.com', 0, '$2y$10$wtBtPbT42ncf3O092HOl6..ry9varXohbipxEu.bUZTXsspSldiOG', NULL, '2018-06-04 16:00:03', '2018-06-04 16:00:03'),
(2, 'Phan Van Tan', 'phanvantan080597@gmail.com', 1, '$2y$10$pifqvkSqTJTO6wecBozkXeY9URVjUnzKjkkrF0XqwA3R8jWLc1r6u', NULL, '2018-05-29 11:03:11', '2018-05-29 18:02:07'),
(3, 'Teo', 'teo0805@gmail.com', 1, '$2y$10$8.TIqgb15vhKVmnuc7WuR.NG2vEPaWsV0APD4OMtDoVUST5M9NQv6', '68cGLjP46EYfJHmuHBzUlN7GJRu2fvRJ6v7qNg0Awtt364ampdlBcNUOT7oU', '2018-05-29 13:53:36', '2018-05-29 13:53:36'),
(4, 'Tấn Phan', 'tanphan0805@gmail.com', 0, '$2y$10$KoNcF/DvfyJavptgsc1y9uKZEP30QgIZ0LNtw9uxsIRd2OOVQOTbi', NULL, '2018-05-29 17:53:50', '2018-05-29 17:53:50');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`id_sach`) REFERENCES `sach` (`id`),
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`id_hoadon`) REFERENCES `hoadon` (`id`);

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`id_khachhang`) REFERENCES `khachhang` (`id`);

--
-- Constraints for table `sach`
--
ALTER TABLE `sach`
  ADD CONSTRAINT `sach_ibfk_1` FOREIGN KEY (`id_loai`) REFERENCES `loaisach` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
