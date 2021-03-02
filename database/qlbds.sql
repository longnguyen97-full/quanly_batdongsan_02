-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2020 at 02:13 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qlbds`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `idads` int(10) UNSIGNED NOT NULL,
  `maads` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkads` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerads` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bantin`
--

CREATE TABLE `bantin` (
  `idbt` int(10) UNSIGNED NOT NULL,
  `mabt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `madm` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenbantin` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungtomtat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bantin`
--

INSERT INTO `bantin` (`idbt`, `mabt`, `madm`, `tenbantin`, `noidungtomtat`, `noidung`, `hinhanh`, `created_at`, `updated_at`) VALUES
(1, 'KT1', 'KT', '6 kiến thức cơ bản về pháp lý ', 'Nhà, đất là những tài sản lớn, là thành quả tích lũy của các gia đình trẻ và các gia đình khác ', 'Các loại thuế, phí nào phải nộp khi bán nhà?\r\nTheo quy định của pháp luật hiện hành, khi muốn chuyển nhượng quyền sử dụng đất và tài sản gắn liền với đất, bạn phải nộp các loại thuế và phí như sau (trừ các trường hợp được miễn đóng thuế, phí và lệ phí theo quy định của pháp luật):\r\n\r\nLệ phí trước bạ\r\nTheo quy định tại khoản 1 Điều 2 Nghị định 45/2011/NĐ-CP ngày 17/6/2011 về lệ phí trước bạ, nhà, đất là một trong các đối tượng chịu lệ phí trước bạ. Theo quy định tại Điều 5, 6, 7 Nghị định này, lệ phí trước bạ được tính như sau:\r\n\r\nLệ phí trước bạ = 0,5% x Giá tính lệ phí trước bạ (giá do Ủy ban nhân dân tỉnh, thành phố trực thuộc Trung ương ban hành)\r\n\r\nThuế thu nhập cá nhân\r\nTheo quy định của Luật Thuế thu nhập cá nhân sửa đổi, bổ sung năm 2012, thu nhập từ chuyển nhượng quyền sử dụng đất và tài sản gắn liền với đất cũng là một trong các loại thu nhập chịu thuế. Có hai cách xác định thuế thu nhập cá nhân mà người chuyển nhượng quyền sử dụng đất và tài sản gắn liền với đất phải nộp như sau:\r\n\r\nThuế thu nhập cá nhân = 25% giá trị lợi nhuận (giá bán – giá mua)\r\n\r\nGiá bán: là giá ghi trên hợp đồng chuyển nhượng;\r\nGiá mua: Là giá mua được xác định căn cứ vào giá ghi trên hợp đồng mua bán. Đối với nhà ở không có nguồn gốc từ nhận chuyển nhượng, mua lại thì căn cứ vào hồ sơ thực hiện nghĩa vụ tài chính với Nhà nước tại thời điểm được cấp Giấy chứng nhận quyền sở hữu, quyền sử dụng nhà ở.\r\nGiấy tờ mua nhà có bắt buộc phải công chứng?\r\nTheo khoản 3 Điều 167 Luật Đất đai 2013, các loại hợp đồng, văn bản thực hiện các quyền của người sử dụng đất phải được công chứng, chứng thực, gồm: hợp đồng chuyển nhượng, tặng, cho, thế chấp, quyền sử dụng đất và tài sản gắn liền với đất.\r\n\r\nNgoài ra, văn bản về thừa kế quyền sử dụng đất, quyền sử dụng đất và tài sản gắn liền với đất cũng cần được công chứng hoặc chứng thực theo quy định. Việc công chứng thực hiện tại các tổ chức hành nghề công chứng, việc chứng thực thực hiện tại ủy ban nhân dân cấp xã.', 'hinh/kt01.jpg', NULL, NULL),
(2, 'KT2', 'KT', 'Nền tảng giúp kiểm chứng pháp ', 'Tháng 2/2017, sau quá trình dài tiếp xúc với các khách hàng tại một công ty tư vấn, Lê Chí Cường cùn', 'Tháng 2/2017, sau quá trình dài tiếp xúc với các khách hàng tại một công ty tư vấn, Lê Chí Cường cùng đồng sự nhận thấy nhiều người thường gặp rắc rối trong việc mua bất động sản và phải đi tranh chấp, khiếu kiện với tài sản mà mình mua. Thời gian đó, họ cũng đọc được nhiều bài báo về các vụ tranh chấp bất động sản mà ít khi phần thắng nghiêng về phía người mua.\r\n\r\n“Lý do là để hiểu kiến thức pháp luật của một loại bất động sản nào đủ điều kiện để bán hay có vấn đề về pháp lý, tài chính hay không thì người dân thường không có. Kế đến là câu chuyện hợp đồng mua bán chủ yếu do chủ đầu tư đơn phương soạn một chiều”, Cường cho biết. Anh giải thích thêm rằng những bản hợp đồng đơn phương ấy thường nghiêng về phía có lợi cho chủ đầu tư, với những điều khoản rào đoán hay thậm chí gọi là bẫy trên thị trường. Vì thế, nếu có vấn đề xảy ra tranh chấp, người mua cũng không thể tự bảo vệ được mình và nếu có mang hồ sơ đi khiếu kiện cũng rất khó vì họ đã ký tên vào các điều khoản, thỏa thuận bất lợi trước đó.', 'hinh/kt02.jpg', NULL, NULL),
(3, 'KT3', 'KT', 'Tư Vấn Pháp Lý Bất Động Sản', 'Tư vấn các vấn đề pháp lý liên quan đến bất động sản là một trong những thế mạnh nổi trội của VN CON', 'Tư vấn các vấn đề pháp lý liên quan đến bất động sản là một trong những thế mạnh nổi trội của VN CONSULT. Luật sư của chúng tôi tư vấn, hỗ trợ khách hàng trong việc xây dựng phương án đầu tư, xin phê duyệt dự án và triển khai các giao dịch bán, cho thuê bất động sản, cụ thể:\r\n\r\nTư vấn triển khai dự án đầu tư kinh doanh bất động sản:\r\n– Đánh giá tính pháp lý dự án bất động sản: Trên cơ sở những kiến thức và kinh nghiệm mà luật sư của VN CONSULT đã tích lũy, kết hợp với sự tham vấn ý kiến từ các Cơ quan chức năng có liên quan, VN CONSULT cung cấp ý kiến pháp lý nhằm hỗ trợ khách hàng lựa chọn giải pháp, mô hình thực hiện dự án đầu tư, kinh doanh bất động sản;\r\n\r\n– Hỗ trợ khách hàng trong các thủ tục hành chính có liên quan để đạt được các phê chuẩn/chấp thuận cần thiết để triển khai dự án bất đồng sản (chấp thuận chủ trương đầu tư, phê duyệt phương án quy hoạch, kiến trúc, phê duyệt phương án đền bù, giải phóng mặt bằng, quyết định giao đất…);\r\n\r\n– Hỗ trợ khách hàng đàm phán, ký kết các hợp đồng đầu tư, xây dựng nhằm triển khai dự án;\r\n\r\n– Hỗ trợ khách hàng là chủ đầu tư các dự án bất động sản trong các giao dịch mua bán, cho thuê bất động sản…\r\n\r\nTư vấn thực hiện giao dịch bất động sản:\r\n– Đánh giá hồ sơ pháp lý của bất động sản, tư vấn cho khách hàng phương án thực hiện giao dịch mua bán, chuyển nhượng (phương án đặt cọc, tiến độ thanh toán, các điều kiện thực hiện giao dịch…) nhằm đảm bảo tối đa quyền lợi của khách hàng;\r\n\r\n– Hỗ trợ đàm phán, thương lượng và soạn thảo hợp đồng chuyển nhượng bất động sản;\r\n\r\n– Đại diện khách hàng thực hiện các thủ tục đăng ký sang tên, chuyển nhượng quyền sử dụng đất và tài sản gắn liền với đất.', 'hinh/kt03.jpg', NULL, NULL),
(4, 'TD1', 'TD', 'Tuyển Dụng Tháng 9', 'Tuyển dụng nhân viên cho vị trí mới..', 'Do mới thành lập chi nhánh mới nên chugns tôi cần các vị trí', 'hinh/td01.jpg', NULL, NULL),
(5, 'TD2', 'TD', 'Tuyển Dụng Quản Lý', 'Tuyển quản lý cho vị trí mới', 'Làm việc xa thành phố', 'hinh/td02.png', NULL, NULL),
(6, 'TD3', 'TD', 'Tuyển Nhân Viên IT', 'Cần các vị trí', 'Quản lý website cho công ty', 'hinh/td03.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `batdongsan`
--

CREATE TABLE `batdongsan` (
  `idbds` int(10) UNSIGNED NOT NULL,
  `mabds` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mavt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mada` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maloai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenbds` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhbds` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motabds` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tinhtrangbds` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `batdongsan`
--

INSERT INTO `batdongsan` (`idbds`, `mabds`, `mavt`, `mada`, `maloai`, `tenbds`, `anhbds`, `motabds`, `tinhtrangbds`, `created_at`, `updated_at`) VALUES
(1, 'BDS1', 'VT01', 'DA00', 'CC', 'Căn Hộ Tầng 20, Block C', 'hinh_upload/DA01.png', 'Căn hộ sang trọng, nội thất tiện nghi', 'Mới', NULL, NULL),
(2, 'BDS2', 'VT01', 'DA09', 'KDC', 'Căn Hộ Block A', 'hinh/content_img2.png', 'Căn hộ block A tọa lạc tại khu đô thị sầm uất', '', NULL, NULL),
(3, 'BDS3', 'VT02', 'DA02', 'BT', 'Biệt Thự 52', 'hinh/bds.jpg', 'Biệt Thự nằm trong khuôn viên', '', NULL, NULL),
(4, 'BDS4', 'VT01', 'DA03', 'CC', 'Căn Hộ 442 Chung Cư Cao Cấp', 'hinh/DA08.png', 'Căn hộ thuộc dự án chung cư cao cấp thế hệ mới', '', NULL, NULL),
(5, 'BDS05', 'VT02', 'DA03', 'CC', 'Căn Hộ Tương Lai', 'hinh/DA09.png', 'Thiết kế theo kiểu mẫu của tương lai', '', NULL, NULL),
(6, 'BDS06', 'VT01', 'DA06', 'CC', 'Căn Hộ 404', 'hinh/DA10.png', 'Căn hộ nằm trong block B khu dân cư', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chudautu`
--

CREATE TABLE `chudautu` (
  `idcdt` int(10) UNSIGNED NOT NULL,
  `macdt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tencdt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dchicdt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdtcdt` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chudautu`
--

INSERT INTO `chudautu` (`idcdt`, `macdt`, `tencdt`, `dchicdt`, `sdtcdt`, `created_at`, `updated_at`) VALUES
(1, 'CDT1', 'Công Ty TNHH 1 Thành Viên Sabe', 'Đường Tân Sơn Nhất', '123123123', NULL, NULL),
(2, 'CDT2', 'Chủ đầu tư mới hợp tác 1', 'Đường ở đâu xa lắm', '123123123', NULL, NULL),
(3, 'CDT3', 'Chủ đầu tư mới hợp tác 2', 'Ở đâu đây không biết', '12312312312', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `chude`
--

CREATE TABLE `chude` (
  `idcd` int(10) UNSIGNED NOT NULL,
  `macd` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tencd` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chude`
--

INSERT INTO `chude` (`idcd`, `macd`, `tencd`, `created_at`, `updated_at`) VALUES
(1, 'ALL', 'ALL', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ct_hopdongdautu`
--

CREATE TABLE `ct_hopdongdautu` (
  `mahddt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tongvon` double NOT NULL,
  `soluong` int(11) NOT NULL,
  `thoihan` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ct_hopdongdautu`
--

INSERT INTO `ct_hopdongdautu` (`mahddt`, `tongvon`, `soluong`, `thoihan`, `created_at`, `updated_at`) VALUES
('HDDT1', 50000000000, 1, 2, NULL, NULL),
('HDDT2', 20000000, 1, 2, NULL, NULL),
('HDDT0', 3000000, 1, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ct_hopdongmuaban`
--

CREATE TABLE `ct_hopdongmuaban` (
  `mahdmb` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soluong` int(11) NOT NULL,
  `tongtien` double NOT NULL,
  `tratruoc` double NOT NULL,
  `conlai` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ct_hopdongmuaban`
--

INSERT INTO `ct_hopdongmuaban` (`mahdmb`, `soluong`, `tongtien`, `tratruoc`, `conlai`, `created_at`, `updated_at`) VALUES
('HDMB1', 1, 2000000000, 1000000000, 1000000000, NULL, NULL),
('HDMB0', 1, 2000000000, 1000000000, 1000000000, NULL, NULL),
('HDMB2', 1, 30000000, 15000000, 15000000, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `iddg` int(10) UNSIGNED NOT NULL,
  `madg` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `makh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mabds` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sao` int(11) NOT NULL,
  `tieudedg` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungdg` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngdg` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `iddm` int(10) UNSIGNED NOT NULL,
  `madm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tendanhmuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`iddm`, `madm`, `tendanhmuc`, `created_at`, `updated_at`) VALUES
(1, 'GKL', 'Góc KingLand', NULL, NULL),
(2, 'KT', 'Kiến Thức', NULL, NULL),
(3, 'TD', 'Tuyển Dụng', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `danhsach`
--

CREATE TABLE `danhsach` (
  `idds` int(10) UNSIGNED NOT NULL,
  `mads` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mavp` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mabds` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `duan`
--

CREATE TABLE `duan` (
  `idda` int(10) UNSIGNED NOT NULL,
  `mada` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenda` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tomtat` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uutien` tinyint(1) NOT NULL,
  `vungmien` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `duan`
--

INSERT INTO `duan` (`idda`, `mada`, `tenda`, `tomtat`, `noidung`, `hinhanh`, `uutien`, `vungmien`, `created_at`, `updated_at`) VALUES
(1, 'DA00', 'Chung Cư Vinvin', 'Chung cư do tập đoàn Vinvin', '', 'hinh/DA04.png', 0, '', '2020-08-31 17:00:00', '2020-09-03 17:00:00'),
(2, 'DA01', 'VinHomes North Point ', 'Đô thị mới giữa lòng thành phố', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA01.png', 1, 'HANOI', '2020-09-01 17:00:00', '2020-09-03 17:00:00'),
(3, 'DA02', 'VinHomes Smart City ', 'Hướng đến khu dân cư tương lai', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA02.png', 1, 'HANOI', '2020-09-02 17:00:00', '2020-09-03 17:00:00'),
(4, 'DA03', 'VinHomes Metropolis ', 'Thành phố đẹp đẽ hiện đại bậc nhất', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA03.png', 0, 'HANOI', '2020-09-03 17:00:00', '2020-09-03 17:00:00'),
(5, 'DA04', 'VinHomes North Point 2', 'Trọng điểm phía Bắc', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA04.png', 0, 'HANOI', '2020-09-03 17:00:00', '2020-09-03 17:00:00'),
(6, 'DA05', 'VinHomes Smart City 2', 'Dự án thành phố thông minh', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA05.png', 0, 'HANOI', '2020-09-03 17:00:00', '2020-09-03 17:00:00'),
(7, 'DA06', 'VinHomes Metropolis ', '', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA06.png', 0, 'HANOI', '2020-09-03 17:00:00', '2020-09-03 17:00:00'),
(8, 'DA07', 'VinHomes Mid Point ', '', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA07.png', 1, 'DANANG', NULL, '2020-09-03 17:00:00'),
(9, 'DA08', 'VinHomes Mid Smart City', 'Thành phố tương lai, thắp sáng thế giới', 'Dự án triển khai nhằm mục đích cung cấp những căn hộ của tương lai cho các khách hàng ở mọi phân khúc', 'hinh/duan/DA08.png', 1, 'DANANG', '2020-09-04 17:00:00', '2020-09-03 17:00:00'),
(10, 'DA09', 'VinHomes Mid Metropolis ', '', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA09.png', 0, 'DANANG', '2020-09-03 17:00:00', '2020-09-03 17:00:00'),
(11, 'DA10', 'VinHomes Mid Point 2', '', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA10.png', 0, 'DANANG', '2020-09-03 17:00:00', '2020-09-03 17:00:00'),
(12, 'DA11', 'VinHomes Mid Smart City 2', '', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA11.png', 0, 'DANANG', NULL, '2020-09-03 17:00:00'),
(13, 'DA12', 'VinHomes Mid Metropolis 2', '', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.\r\n', 'hinh/duan/DA12.png', 0, 'DANANG', NULL, '2020-09-03 17:00:00'),
(14, 'DA13', 'VinHomes South Point ', '', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.\r\nTrong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.\r\nTrong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA13.png', 1, 'HCM', '2020-09-03 17:00:00', '2020-09-03 17:00:00'),
(15, 'DA14', 'VinHomes South Smart City ', '', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA14.png', 0, 'HCM', NULL, '2020-09-03 17:00:00'),
(16, 'DA15', 'VinHomes South Metropolis ', '', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA15.png', 0, 'HCM', NULL, '2020-09-03 17:00:00'),
(17, 'DA16', 'VinHomes South Point 2', '', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA16.png', 0, 'HCM', NULL, '2020-09-03 17:00:00'),
(18, 'DA17', 'VinHomes South Smart City 2', '', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA17.png', 0, 'HCM', NULL, '2020-09-03 17:00:00'),
(19, 'DA18', 'VinHomes South Metropolis 2', '', 'Trong chu kỳ phát triển của thị trường bất động sản (BĐS) giai đoạn 5 năm trở lại đây, hàng loạt các khu đô thị đã và đang được hình thành với quy hoạch và có tổng mức vốn đầu tư hàng tỷ đô la Mỹ đã tạo nên diện mạo những khu đô thị trong tương lai của Việt Nam sánh tầm thế giới.\r\nĐây là nơi tập trung sinh sống của những người có thu nhập cao. Dự định của các nhà đầu tư nước ngoài là biến khu đầm lầy thành một khu đô thị đa chức năng kiểu mẫu, là một trung tâm tài chính, thương mại, dịch vụ, công nghiệp, khoa học, văn hóa, giáo dục, cư trú, giải trí… tạo động lực cho sự phát triển phía Nam và Đông Nam thành phố. Khác với quận 1 là trung tâm gắn liền với lịch sử, khu đô thị Phú Mỹ Hưng được xây dựng gắn liền với khái niệm hiện đại.', 'hinh/duan/DA18.png', 0, 'HCM', NULL, '2020-09-03 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `hopdongdautu`
--

CREATE TABLE `hopdongdautu` (
  `idhddt` int(10) UNSIGNED NOT NULL,
  `mahddt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenhopdong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `macdt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mabds` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaylaphddt` datetime NOT NULL,
  `tinhtranghddt` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hopdongdautu`
--

INSERT INTO `hopdongdautu` (`idhddt`, `mahddt`, `tenhopdong`, `macdt`, `manv`, `mabds`, `ngaylaphddt`, `tinhtranghddt`, `created_at`, `updated_at`) VALUES
(1, 'HDDT1', 'Hợp Đồng Đầu Tư Số 1', 'CDT1', 'NV1', 'BDS1', '2020-09-03 00:00:00', 'Mới', NULL, NULL),
(3, 'HDDT2', 'Hợp đồng mới ký 1', 'CDT1', 'NV2', 'BDS1', '2020-09-04 00:00:00', 'Mới', NULL, NULL),
(4, 'HDDT0', 'Hợp đồng mới ký 2', 'CDT1', 'NV1', 'BDS1', '2020-09-08 00:00:00', 'Mới', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hopdongmuaban`
--

CREATE TABLE `hopdongmuaban` (
  `idhdmb` int(10) UNSIGNED NOT NULL,
  `mahdmb` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenhopdong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `makh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mabds` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngaylaphdmb` datetime NOT NULL,
  `tinhtranghdmb` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hopdongmuaban`
--

INSERT INTO `hopdongmuaban` (`idhdmb`, `mahdmb`, `tenhopdong`, `manv`, `makh`, `mabds`, `ngaylaphdmb`, `tinhtranghdmb`, `created_at`, `updated_at`) VALUES
(1, 'HDMB1', 'Hợp Đồng Mua Bán', 'NV1', 'KH1', 'BDS1', '2020-09-03 00:00:00', 'Mới', NULL, NULL),
(2, 'HDMB0', 'Hợp đồng mới ký 1', 'NV1', 'KH1', 'BDS1', '2020-09-04 00:00:00', 'Mới', NULL, NULL),
(3, 'HDMB2', 'Hợp đồng mới ký 2', 'NV3', 'KH3', 'BDS4', '2020-09-03 00:00:00', 'Mới', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `idkh` int(10) UNSIGNED NOT NULL,
  `makh` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotenkh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngsinhkh` date NOT NULL,
  `dchikh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdtkh` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`idkh`, `makh`, `hotenkh`, `ngsinhkh`, `dchikh`, `sdtkh`, `created_at`, `updated_at`) VALUES
(1, 'KH1', 'Khách Hàng Số 1', '2020-09-01', 'Đường Lâm Văn Bền', '123123123', NULL, NULL),
(2, 'KH2', 'Khách hàng mới lại mua 1', '2020-09-05', 'Đường 123123123', '123123123', NULL, NULL),
(3, 'KH3', 'Khách hàng mới lại mua 2', '2020-09-01', 'Đường 08912213', '123213123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `idloai` int(10) UNSIGNED NOT NULL,
  `maloai` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenloai` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dongia` double NOT NULL,
  `loaitien` varchar(3) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mausac` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`idloai`, `maloai`, `tenloai`, `dongia`, `loaitien`, `mausac`, `created_at`, `updated_at`) VALUES
(1, 'CC', 'Chung Cư', 5000000000, 'VNĐ', 'Trắng', NULL, NULL),
(2, 'BT', 'Biệt Thự', 10000000000, 'VNĐ', 'Xanh', NULL, NULL),
(3, 'KDC', 'Khu Dân Cư', 2000000000, 'VNĐ', 'Vàng', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `luottruycap`
--

CREATE TABLE `luottruycap` (
  `idltc` int(10) UNSIGNED NOT NULL,
  `maltc` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dangonline` int(11) NOT NULL,
  `soluot` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `nhanvien`
--

CREATE TABLE `nhanvien` (
  `idnv` int(10) UNSIGNED NOT NULL,
  `manv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mavp` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hotennv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngsinhnv` date NOT NULL,
  `dchinv` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdtnv` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `nhanvien`
--

INSERT INTO `nhanvien` (`idnv`, `manv`, `mavp`, `hotennv`, `ngsinhnv`, `dchinv`, `sdtnv`, `created_at`, `updated_at`) VALUES
(1, 'NV1', 'VP00', 'Nhân Viên Số 1', '2020-09-01', 'Đường Lâm Văn Bền', '123123123', NULL, NULL),
(2, 'NV2', 'VP00', 'Nhân Viên Mới Tuyển 1', '2020-09-05', 'Đường quận 7, kế quận 4', '123123123', NULL, NULL),
(3, 'NV3', 'VP00', 'Nhân Viên Mới Tuyển 2', '2020-09-05', 'Quận 8 nè', '123123123', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `phanhoidanhgia`
--

CREATE TABLE `phanhoidanhgia` (
  `idph` int(10) UNSIGNED NOT NULL,
  `maph` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `madg` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manv` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungph` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngph` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `taikhoan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phanquyen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`taikhoan`, `matkhau`, `phanquyen`, `created_at`, `updated_at`) VALUES
('nhanvien', '123', 'nhanvien', NULL, NULL),
('quanly', '123', 'quanly', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `idtt` int(10) UNSIGNED NOT NULL,
  `matt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `macd` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tieudett` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngdangtt` datetime NOT NULL,
  `tomtattt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidungtt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `anhtt` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tintuc`
--

INSERT INTO `tintuc` (`idtt`, `matt`, `macd`, `tieudett`, `ngdangtt`, `tomtattt`, `noidungtt`, `anhtt`, `created_at`, `updated_at`) VALUES
(1, 'TT00', 'ALL', 'Hoa Hậu Ngô Phương Lan Nói Gì Về Vinhomes Smart City', '2020-09-01 00:00:00', 'Tại buổi tọa đàm về gia đình do Vinhomes tổ chức mới đây, Hoa hậu Thế giới người Việt 2007 – Ngô Phư', 'Vinhomes Smart City giúp gia đình gần nhau hơn\r\nHoa hậu Ngô Phương Lan cho biết hiện nay không ít gia đình “tam đại đồng đường” sống chung với nhau dưới một mái nhà. Mặc dù mục đích chính của việc sống chung là để gắn kết, chăm sóc, hỗ trợ nhau nhưng sự khác biệt về tuổi tác, lối sống và nhu cầu riêng của từng thành viên làm nảy sinh những rắc rối không đáng có. Cô cho rằng một không gian sống hiện đại, thông minh hoàn toàn có thể giải quyết tất cả mọi rào cản và những bất cập hiện tại.\r\n\r\nĐến với sự kiện, Hoa hậu Phương Lan chia sẻ: “Tôi từng trải nghiệm cuộc sống tiện nghi, hiện đại ở Hong Kong, nay chứng kiến một đại đô thị có phong cách sống thông minh tương tự như vậy ngay tại thủ đô Hà Nội nên cảm thấy thật sự phấn khởi. Ai đó bảo rằng công nghệ làm con người ngày càng xa cách nhau nhưng thực tế thì việc ứng dụng công nghệ vào không gian sống sẽ giúp các thành viên trong gia đình xích lại gần nhau hơn”.\r\n\r\nTại sự kiện, Hoa hậu Phương Lan có cơ hội tham quan các căn hộ mẫu Vinhomes Smart City và đánh giá cao thiết kế hiện đại và cách bố trí không gian khoa học. Ngoài ra, các thành viên trong gia đình cũng không cần đi đâu xa vì tại khu đô thị đã có tất cả tiện ích để đáp ứng mọi nhu cầu.', 'hinh/tt00.jpg', NULL, NULL),
(4, 'TT01', 'ALL', 'Vinhomes Smart City Sắp Ra Mắt Vườn Nhật Lớn Nhất Việt Nam', '2020-09-02 00:00:00', 'Ngày 29/7/2019 CTCP Vinhomes chính thức công bố triển khai xây dựng Vườn Nhật hơn 6 ha tại đô thị th', 'Vườn Nhật biểu tượng Á Đông tại Vinhomes Smart City\r\nVườn Nhật truyền thống được coi là đỉnh cao của nghệ thuật sân vườn, mang tới không gian tĩnh tại, an lạc và là biểu tượng của tinh thần Á đông. Các quốc gia phát triển như Mỹ, Canada, Pháp… đều kiến tạo những khu Vườn Nhật nổi tiếng, thu hút hàng triệu lượt khách du lịch mỗi năm.\r\n\r\nNhằm mang tới cho cư dân một cuộc sống viên mãn; và góp phần kiến tạo cho phía tây thành phố một điểm tham quan xứng tầm – CTCP Vinhomes quyết định đầu tư xây dựng Vườn Nhật có quy mô lớn nhất Việt Nam tại Đại đô thị thông minh Vinhomes Smart City.\r\n\r\nCông trình có diện tích hơn 6 ha, được kiến tạo theo mô hình Vườn Nhật truyền thống với đầy đủ các hạng mục gồm: quảng trường, cầu gỗ đỏ, suối và hồ cá chép đỏ, vườn thiền, công viên đèn lồng, chòi gỗ, khu rừng tre trúc, núi giả, thác nước, nhà hàng Nhật …', 'hinh/tt01.jpg', NULL, NULL),
(5, 'TT02', 'ALL', 'Đại Đô Thị Thông Minh Vượt Xa Căn Hộ Thông Minh Như Thế Nào', '2020-09-04 00:00:00', 'Không gói gọn những yếu tố công nghệ tại căn hộ thông minh, sống thông minh tại đại đô thị thông min', 'Xu hướng căn hộ thông minh nở rộ\r\nXu hướng căn hộ thông minh (smart home) đã trở nên phổ biến trên thị trường bất động sản trong nước thời gian gần đây nhờ sự phát triển nhanh chóng của công nghệ IoT (kết nối vạn vật qua internet), Big Data (dữ liệu lớn), AI (trí tuệ nhân tạo)…\r\n\r\nTheo đánh giá của hãng thống kê Statista (Đức), doanh thu từ thị trường smart home Việt Nam dự kiến đạt 83 triệu USD trong năm 2019, nhiều hơn gấp đôi so với năm 2018. Đến năm 2023, con số này ước đạt 437 triệu USD.\r\n\r\nMô hình smart home nở rộ vì có khả năng tiết kiệm thời gian đáng kể cho chủ căn hộ và giúp cuộc sống trở nên dễ dàng hơn. Chẳng hạn, chủ căn hộ có thể điều khiển hệ thống đèn chiếu sáng, rèm cửa, bình nóng lạnh, máy điều hòa, âm thanh… chỉ bằng vài cú chạm trên smart phone hay thiết bị di động có kết nối internet.\r\n\r\nĐiều này giúp các thành viên trong gia đình hoàn toàn an tâm khi vắng nhà, dành nhiều thời gian cho bản thân trải nghiệm cuộc sống.\r\n\r\nSong, smart home chỉ gói gọn yếu tố công nghệ trong phạm vi từng căn hộ đơn lẻ. Do đó, tính kết nối và tương tác thông minh chỉ giới hạn giữa chủ nhân và căn hộ, sự tiện nghi chưa thể trọn vẹn.\r\n\r\nĐể nới rộng giới hạn đó, các tập đoàn bất động sản tiên phong với tầm nhìn xa đã chi mạnh tay đầu tư xây dựng cả đô thị thông minh để người dân trải nghiệm và thụ hưởng trọn vẹn nhất phong cách sống thời đại công nghệ 4.0, bắt kịp trào lưu chung của thế giới.', 'hinh/tt02.jpg', NULL, NULL),
(6, 'TT03', 'ALL', 'Khách Hàng Trải Nghiệm Phong Cách Sống Thông Minh Do VinGroup Tổ Chức', '2020-09-05 00:00:00', 'Vào ngày 1-2/6, Vingroup đã tổ chức sự kiện “Trải nghiệm phong cách sống thông minh” tại trung tâm t', 'Những hoạt động trải nghiệm thú vị tại sự kiện dự án Vinhomes Smart City\r\nTrong dịp này, khách hàng đã được trải nghiệm các hoạt động thú vị như vui chơi thông minh, mua sắm thông minh… Thông qua các hoạt động vui chơi, thể thao, mua sắm… người tham dự sẽ có hình dung sinh động về các tính năng thông minh tại Vinhomes Smart City.\r\nĐể mang đến “không gian công nghệ 4.0” theo đúng tinh thần của dự án, khách tham dự đã được trải nghiệm “check in” gương mặt bằng Face ID. Đây cũng là một trong những tính năng nổi bật trang bị tại đại đô thị thông minh Vinhomes Smart City, giúp cư dân di chuyển lên thang máy mà không cần sử dụng thẻ từ hay nút bấm nhưng vẫn đảm bảo an ninh – an toàn.', 'hinh/tt03.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vanphong`
--

CREATE TABLE `vanphong` (
  `idvp` int(10) UNSIGNED NOT NULL,
  `mavp` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ddiemvp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vanphong`
--

INSERT INTO `vanphong` (`idvp`, `mavp`, `ddiemvp`, `created_at`, `updated_at`) VALUES
(1, 'VP00', 'Đường Trần Văn Trà', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vitri`
--

CREATE TABLE `vitri` (
  `idvt` int(10) UNSIGNED NOT NULL,
  `mavt` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thanhpho` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mavung` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenduong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vitri`
--

INSERT INTO `vitri` (`idvt`, `mavt`, `thanhpho`, `mavung`, `tenduong`, `created_at`, `updated_at`) VALUES
(1, 'VT00', 'TP HCM', '123123213', 'Đường Nguyễn Văn Linh', NULL, NULL),
(2, 'VT01', 'Đà Nẵng', '123123213', 'Đường Nguyễn Văn Linh', NULL, NULL),
(3, 'VT02', 'Hà Nội', '123123123', 'Đường Thanh Xuân', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`idads`),
  ADD UNIQUE KEY `ads_maads_unique` (`maads`);

--
-- Indexes for table `bantin`
--
ALTER TABLE `bantin`
  ADD PRIMARY KEY (`idbt`),
  ADD UNIQUE KEY `bantin_mabt_unique` (`mabt`),
  ADD KEY `bantin_madm_foreign` (`madm`);

--
-- Indexes for table `batdongsan`
--
ALTER TABLE `batdongsan`
  ADD PRIMARY KEY (`idbds`),
  ADD UNIQUE KEY `batdongsan_mabds_unique` (`mabds`),
  ADD KEY `batdongsan_mavt_foreign` (`mavt`),
  ADD KEY `batdongsan_mada_foreign` (`mada`),
  ADD KEY `batdongsan_maloai_foreign` (`maloai`);

--
-- Indexes for table `chudautu`
--
ALTER TABLE `chudautu`
  ADD PRIMARY KEY (`idcdt`),
  ADD UNIQUE KEY `chudautu_macdt_unique` (`macdt`);

--
-- Indexes for table `chude`
--
ALTER TABLE `chude`
  ADD PRIMARY KEY (`idcd`),
  ADD UNIQUE KEY `chude_macd_unique` (`macd`);

--
-- Indexes for table `ct_hopdongdautu`
--
ALTER TABLE `ct_hopdongdautu`
  ADD KEY `ct_hopdongdautu_mahddt_foreign` (`mahddt`);

--
-- Indexes for table `ct_hopdongmuaban`
--
ALTER TABLE `ct_hopdongmuaban`
  ADD KEY `ct_hopdongmuaban_mahdmb_foreign` (`mahdmb`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD PRIMARY KEY (`iddg`),
  ADD UNIQUE KEY `danhgia_madg_unique` (`madg`),
  ADD KEY `danhgia_makh_foreign` (`makh`),
  ADD KEY `danhgia_mabds_foreign` (`mabds`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`iddm`),
  ADD UNIQUE KEY `danhmuc_madm_unique` (`madm`);

--
-- Indexes for table `danhsach`
--
ALTER TABLE `danhsach`
  ADD PRIMARY KEY (`idds`),
  ADD UNIQUE KEY `danhsach_mads_unique` (`mads`),
  ADD KEY `danhsach_mavp_foreign` (`mavp`),
  ADD KEY `danhsach_mabds_foreign` (`mabds`);

--
-- Indexes for table `duan`
--
ALTER TABLE `duan`
  ADD PRIMARY KEY (`idda`),
  ADD UNIQUE KEY `duan_mada_unique` (`mada`);

--
-- Indexes for table `hopdongdautu`
--
ALTER TABLE `hopdongdautu`
  ADD PRIMARY KEY (`idhddt`),
  ADD UNIQUE KEY `hopdongdautu_mahddt_unique` (`mahddt`),
  ADD KEY `hopdongdautu_macdt_foreign` (`macdt`),
  ADD KEY `hopdongdautu_manv_foreign` (`manv`),
  ADD KEY `hopdongdautu_mabds_foreign` (`mabds`);

--
-- Indexes for table `hopdongmuaban`
--
ALTER TABLE `hopdongmuaban`
  ADD PRIMARY KEY (`idhdmb`),
  ADD UNIQUE KEY `hopdongmuaban_mahdmb_unique` (`mahdmb`),
  ADD KEY `hopdongmuaban_manv_foreign` (`manv`),
  ADD KEY `hopdongmuaban_makh_foreign` (`makh`),
  ADD KEY `hopdongmuaban_mabds_foreign` (`mabds`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`idkh`),
  ADD UNIQUE KEY `khachhang_makh_unique` (`makh`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`idloai`),
  ADD UNIQUE KEY `loai_maloai_unique` (`maloai`);

--
-- Indexes for table `luottruycap`
--
ALTER TABLE `luottruycap`
  ADD PRIMARY KEY (`idltc`),
  ADD UNIQUE KEY `luottruycap_maltc_unique` (`maltc`);

--
-- Indexes for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`idnv`),
  ADD UNIQUE KEY `nhanvien_manv_unique` (`manv`),
  ADD KEY `nhanvien_mavp_foreign` (`mavp`);

--
-- Indexes for table `phanhoidanhgia`
--
ALTER TABLE `phanhoidanhgia`
  ADD PRIMARY KEY (`idph`),
  ADD UNIQUE KEY `phanhoidanhgia_maph_unique` (`maph`),
  ADD KEY `phanhoidanhgia_madg_foreign` (`madg`),
  ADD KEY `phanhoidanhgia_manv_foreign` (`manv`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`idtt`),
  ADD UNIQUE KEY `tintuc_matt_unique` (`matt`),
  ADD KEY `tintuc_macd_foreign` (`macd`);

--
-- Indexes for table `vanphong`
--
ALTER TABLE `vanphong`
  ADD PRIMARY KEY (`idvp`),
  ADD UNIQUE KEY `vanphong_mavp_unique` (`mavp`);

--
-- Indexes for table `vitri`
--
ALTER TABLE `vitri`
  ADD PRIMARY KEY (`idvt`),
  ADD UNIQUE KEY `vitri_mavt_unique` (`mavt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `idads` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bantin`
--
ALTER TABLE `bantin`
  MODIFY `idbt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `batdongsan`
--
ALTER TABLE `batdongsan`
  MODIFY `idbds` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chudautu`
--
ALTER TABLE `chudautu`
  MODIFY `idcdt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chude`
--
ALTER TABLE `chude`
  MODIFY `idcd` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `danhgia`
--
ALTER TABLE `danhgia`
  MODIFY `iddg` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `iddm` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `danhsach`
--
ALTER TABLE `danhsach`
  MODIFY `idds` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `duan`
--
ALTER TABLE `duan`
  MODIFY `idda` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `hopdongdautu`
--
ALTER TABLE `hopdongdautu`
  MODIFY `idhddt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hopdongmuaban`
--
ALTER TABLE `hopdongmuaban`
  MODIFY `idhdmb` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `idkh` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `idloai` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `luottruycap`
--
ALTER TABLE `luottruycap`
  MODIFY `idltc` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `idnv` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `phanhoidanhgia`
--
ALTER TABLE `phanhoidanhgia`
  MODIFY `idph` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `idtt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vanphong`
--
ALTER TABLE `vanphong`
  MODIFY `idvp` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `vitri`
--
ALTER TABLE `vitri`
  MODIFY `idvt` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bantin`
--
ALTER TABLE `bantin`
  ADD CONSTRAINT `bantin_madm_foreign` FOREIGN KEY (`madm`) REFERENCES `danhmuc` (`madm`);

--
-- Constraints for table `batdongsan`
--
ALTER TABLE `batdongsan`
  ADD CONSTRAINT `batdongsan_mada_foreign` FOREIGN KEY (`mada`) REFERENCES `duan` (`mada`),
  ADD CONSTRAINT `batdongsan_maloai_foreign` FOREIGN KEY (`maloai`) REFERENCES `loai` (`maloai`),
  ADD CONSTRAINT `batdongsan_mavt_foreign` FOREIGN KEY (`mavt`) REFERENCES `vitri` (`mavt`);

--
-- Constraints for table `ct_hopdongdautu`
--
ALTER TABLE `ct_hopdongdautu`
  ADD CONSTRAINT `ct_hopdongdautu_mahddt_foreign` FOREIGN KEY (`mahddt`) REFERENCES `hopdongdautu` (`mahddt`);

--
-- Constraints for table `ct_hopdongmuaban`
--
ALTER TABLE `ct_hopdongmuaban`
  ADD CONSTRAINT `ct_hopdongmuaban_mahdmb_foreign` FOREIGN KEY (`mahdmb`) REFERENCES `hopdongmuaban` (`mahdmb`);

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_mabds_foreign` FOREIGN KEY (`mabds`) REFERENCES `batdongsan` (`mabds`),
  ADD CONSTRAINT `danhgia_makh_foreign` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `danhsach`
--
ALTER TABLE `danhsach`
  ADD CONSTRAINT `danhsach_mabds_foreign` FOREIGN KEY (`mabds`) REFERENCES `batdongsan` (`mabds`),
  ADD CONSTRAINT `danhsach_mavp_foreign` FOREIGN KEY (`mavp`) REFERENCES `vanphong` (`mavp`);

--
-- Constraints for table `hopdongdautu`
--
ALTER TABLE `hopdongdautu`
  ADD CONSTRAINT `hopdongdautu_mabds_foreign` FOREIGN KEY (`mabds`) REFERENCES `batdongsan` (`mabds`),
  ADD CONSTRAINT `hopdongdautu_macdt_foreign` FOREIGN KEY (`macdt`) REFERENCES `chudautu` (`macdt`),
  ADD CONSTRAINT `hopdongdautu_manv_foreign` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Constraints for table `hopdongmuaban`
--
ALTER TABLE `hopdongmuaban`
  ADD CONSTRAINT `hopdongmuaban_mabds_foreign` FOREIGN KEY (`mabds`) REFERENCES `batdongsan` (`mabds`),
  ADD CONSTRAINT `hopdongmuaban_makh_foreign` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`),
  ADD CONSTRAINT `hopdongmuaban_manv_foreign` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Constraints for table `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD CONSTRAINT `nhanvien_mavp_foreign` FOREIGN KEY (`mavp`) REFERENCES `vanphong` (`mavp`);

--
-- Constraints for table `phanhoidanhgia`
--
ALTER TABLE `phanhoidanhgia`
  ADD CONSTRAINT `phanhoidanhgia_madg_foreign` FOREIGN KEY (`madg`) REFERENCES `danhgia` (`madg`),
  ADD CONSTRAINT `phanhoidanhgia_manv_foreign` FOREIGN KEY (`manv`) REFERENCES `nhanvien` (`manv`);

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tintuc_macd_foreign` FOREIGN KEY (`macd`) REFERENCES `chude` (`macd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
