-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 16, 2024 lúc 01:14 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `duan1_2023`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh_sp`
--

CREATE TABLE `anh_sp` (
  `id` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `ten_anh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `anh_sp`
--

INSERT INTO `anh_sp` (`id`, `idsp`, `ten_anh`) VALUES
(12, 20, 'loai_giuong 1-3.jpg'),
(13, 20, 'loai_giuong 1-2.jpg'),
(24, 27, 'ghe_vanphong_1.3.jpg'),
(25, 27, 'ghe_vanphong_1.4.jpg'),
(26, 27, 'ghe_vanphong_1.jpg'),
(27, 36, 'tu ke1.jpg'),
(28, 36, 'tu ke2.jpg'),
(29, 36, 'tu ke3.jpg'),
(30, 36, 'thanh-ly-ban-ghe-van-phong-o-da-thon-1.jpg'),
(31, 36, 'trang_tri 1.jpg'),
(32, 36, 'trang_tri 2.jpg'),
(33, 36, 'trang_tri 3.jpg'),
(34, 36, 'trang_tri 4.jpg'),
(35, 36, 'trang_tri 6.jpg'),
(36, 36, 'trang_tri 7.jpg'),
(37, 36, 'trang_tri 8.jpg'),
(38, 36, 'trang_tri 9.jpg'),
(39, 36, 'trang_tri 10.jpg'),
(40, 36, 'Virana-Executive-Desk-Side-BK-768x512.jpg'),
(41, 35, 'guong-cam-ung-thong-minh.jpg'),
(42, 35, 'guong-led-vien-sang-cam-ung-vuong-600x600-2.jpg'),
(43, 35, 'guong-spa-khac-logo.jpg'),
(44, 34, 'OIP.jpg'),
(45, 34, 'OIP1.jpg'),
(46, 34, '251FownLsU5L._AC_SL1024.jpg'),
(47, 33, 'ban_an_1.jpg'),
(48, 33, 'ban_an_2.3.jpg'),
(49, 33, 'ban_an_2.4.jpg'),
(50, 33, 'ban_an_2.jpg'),
(51, 33, 'ban_an_3.1.jpg'),
(52, 32, 'ban_an_3.2.jpg'),
(53, 32, 'ban_an_3.3.jpg'),
(54, 32, 'ban_an_3.4.jpg'),
(55, 32, 'ban_an_3.jpg'),
(56, 31, 'loai_ghe 3-1.jpg'),
(57, 31, 'loai_ghe 3-2.jpg'),
(58, 31, 'loai_ghe 3-3.jpg'),
(59, 30, 'loai_ban 1-2.jpg'),
(60, 30, 'loai_ban 1-3.jpg'),
(61, 30, 'loai_ban 2-1.jpg'),
(62, 30, 'loai_ban 2-2.jpg'),
(63, 30, 'loai_ban 2-3.jpg'),
(64, 29, 'chi_tiet loai_giuong 1-2.jpg'),
(65, 29, 'chi_tiet loai_giuong 2-1.1.jpg'),
(66, 29, 'chi_tiet loai_giuong 2-1.jpg'),
(68, 29, 'chi_tiet loai_giuong 3-1.1.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bien_the`
--

CREATE TABLE `bien_the` (
  `id` int(10) NOT NULL,
  `idsp` int(10) NOT NULL,
  `idkt` int(10) NOT NULL,
  `so_luong` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bien_the`
--

INSERT INTO `bien_the` (`id`, `idsp`, `idkt`, `so_luong`) VALUES
(2, 20, 5, 25),
(14, 20, 4, 15),
(15, 20, 6, 12),
(20, 27, 6, 2),
(21, 27, 4, 23),
(23, 27, 5, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill`
--

CREATE TABLE `bill` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `bill_name` varchar(255) NOT NULL,
  `bill_address` varchar(255) NOT NULL,
  `bill_tel` varchar(50) NOT NULL,
  `bill_email` varchar(100) NOT NULL,
  `idpttt` int(10) DEFAULT NULL,
  `idptvc` int(10) NOT NULL,
  `bill_status` tinyint(1) DEFAULT NULL,
  `ngaydathang` varchar(255) DEFAULT NULL,
  `total` int(10) NOT NULL DEFAULT 0,
  `receive_name` varchar(255) DEFAULT NULL,
  `receive_address` varchar(255) DEFAULT NULL,
  `receive_tel` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `bill`
--

INSERT INTO `bill` (`id`, `iduser`, `bill_name`, `bill_address`, `bill_tel`, `bill_email`, `idpttt`, `idptvc`, `bill_status`, `ngaydathang`, `total`, `receive_name`, `receive_address`, `receive_tel`) VALUES
(51, 58, 'Đình Mạnh1', 'Tu Hoàng', '0862428354', 'manhld@gmail.com', 3, 3, 3, '02:03:16am 14/12/2023', 497, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(10) NOT NULL,
  `noi_dung` varchar(255) NOT NULL,
  `idpro` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `ngay_bl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `binh_luan`
--

INSERT INTO `binh_luan` (`id`, `noi_dung`, `idpro`, `iduser`, `ngay_bl`) VALUES
(10, '\"Tôi rất hài lòng với bộ bàn ghế này! Chất liệu chắc chắn và thiết kế đẹp mắt, tạo điểm nhấn tuyệt vời cho không gian phòng khách của tôi.\"', 29, 55, '18:05 12/12/2023'),
(11, ' \"Bàn và ghế rất tiện ích và thoải mái. Sự kết hợp hoàn hảo giữa kiểu dáng hiện đại và tính ứng dụng hàng ngày.\"', 29, 55, '18:05 12/12/2023'),
(12, ' \"Sản phẩm đúng như mô tả, thậm chí còn tốt hơn mong đợi! Sự chắc chắn và tinh tế trong từng chi tiết đã thuyết phục tôi.\"', 29, 55, '18:05 12/12/2023'),
(13, ' \"Sản phẩm đúng như mô tả, thậm chí còn tốt hơn mong đợi! Sự chắc chắn và tinh tế trong từng chi tiết đã thuyết phục tôi.\"', 20, 55, '18:09 12/12/2023'),
(14, ' \"Bàn và ghế rất tiện ích và thoải mái. Sự kết hợp hoàn hảo giữa kiểu dáng hiện đại và tính ứng dụng hàng ngày.\"', 20, 55, '18:10 12/12/2023'),
(16, 'Sane= o=pham dep', 20, 58, '08:01 14/12/2023'),
(17, 'trsrdfyugihojpk', 20, 58, '22:26 28/12/2023');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `iduser` int(10) NOT NULL,
  `idpro` int(10) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `name_sp` varchar(255) DEFAULT NULL,
  `size` varchar(255) DEFAULT NULL,
  `price` int(10) NOT NULL,
  `soluong` int(10) NOT NULL,
  `thanhtien` int(10) NOT NULL,
  `idbill` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `cart`
--

INSERT INTO `cart` (`id`, `iduser`, `idpro`, `img`, `name_sp`, `size`, `price`, `soluong`, `thanhtien`, `idbill`) VALUES
(13, 50, 20, 'upload/loai_giuong 1-1.jpg', 'Giường ngủ gỗ tràm MOHO', '1', 400, 400, 0, 42),
(14, 50, 20, 'upload/loai_giuong 1-1.jpg', 'Giường ngủ gỗ tràm MOHO', '1', 400, 400, 0, 43),
(23, 58, 20, 'upload/loai_giuong 1-1.jpg', 'Giường ngủ gỗ tràm MOHO', '1', 400, 400, 0, 51),
(24, 58, 27, 'upload/ghe_vanphong_1.jpg', 'Ghế Xoay Văn Phòng Tay Gập Thông Minh', '1', 97, 97, 0, 51),
(25, 58, 20, 'upload/loai_giuong 1-1.jpg', 'Giường ngủ gỗ tràm MOHO', '1', 400, 400, 0, 52);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danh_muc`
--

CREATE TABLE `danh_muc` (
  `id` int(10) NOT NULL,
  `name_dm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `danh_muc`
--

INSERT INTO `danh_muc` (`id`, `name_dm`) VALUES
(1, 'Nội thất phòng khách'),
(2, 'Nội thất phòng làm việc'),
(3, 'Nội thất nhà bếp'),
(4, 'Nội thất nhà tắm'),
(5, 'Nội thất phòng ngủ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_hoa`
--

CREATE TABLE `hang_hoa` (
  `id` int(10) NOT NULL,
  `name_sp` varchar(255) NOT NULL,
  `price_goc` double(10,2) NOT NULL,
  `price` double(10,2) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `ngaynhap` date NOT NULL,
  `mota` varchar(1000) NOT NULL,
  `view` int(11) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `hang_hoa`
--

INSERT INTO `hang_hoa` (`id`, `name_sp`, `price_goc`, `price`, `img`, `ngaynhap`, `mota`, `view`, `iddm`) VALUES
(20, 'Giường ngủ gỗ tràm MOHO', 500.00, 400.00, 'loai_giuong 1-1.jpg', '2023-11-21', 'Chất liệu:\r\n\r\n- Thân giường: Gỗ tràm tự nhiên, Veneer gỗ tràm tự nhiên\r\n\r\n- Chân giường: Gỗ thông tự nhiên\r\n\r\n- Tấm phản: Gỗ plywood chuẩn CARB-P2 (*)\r\n\r\n(*) Tiêu chuẩn California Air Resources Board xuất khẩu Mỹ, đảm bảo gỗ không độc hại, an toàn cho sức.', 120, 5),
(27, 'Ghế Xoay Văn Phòng Tay Gập Thông Minh', 100.00, 97.00, 'ghe_vanphong_1.jpg', '2023-12-12', '<strong>1. THÔNG SỐ KỸ THUẬT </strong>\r\nKích thước: Dài 52cm x Rộng 65cm x Cao 94-101cmChất liệu:\r\n- Khung ghế: nhựa cao cấp\r\n- Tựa lưng và nệm ghế: vải lưới mềm mại thoáng khí<br><br>\r\n2. CHI TIẾT VẬT LIỆU\r\nNhựa cao cấp\r\nKhung ghế, tựa tay và bánh xe được làm bằng nhựa cao cấp có độ bền sử dụng cao\r\n\r\nVải lưới mềm mại thoáng khí\r\nVới chất liệu vải nhập cao cấp, thoáng khí giúp bạn luôn thoải mái dù sử dụng trong nhiều giờ<br><br>\r\n3. ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế lưng trung với chiều cao phổ biến\r\nVới chiều cao linh hoạt có thể thay đổi từ 38 – 45 cm tính từ nệm ghế so với mặt đất, phần lưng trung cao 49 cm rất phù hợp với người Việt Nam.\r\n\r\nGhế xoay văn phòng RIGA\r\n\r\nĐệm ngồi thoáng mát – thiết kế vừa phải<br>\r\nNệm ghế dày 7 cm, sử dụng vải 3 lớp mềm mại dễ dàng vệ sinh, hạn chế bị dơ và đặc biệt mang lại cảm giác êm ái thoải mái khi bạn ngồi trong nhiều giờ.<br>\r\nGhế xoay văn phòng RIGA\r\n\r\nTựa lưng chắc chắn, bo cong mềm mại<br>\r\nVới thiết kế tối ưu, tựa lưng sử dụng chất liệu nhựa PP ', 23, 2),
(28, 'Giường ngủ cao cấp Majestic', 640.00, 620.00, 'loai_giuong 3-1.jpg', '2023-12-14', '<strong>1. THÔNG SỐ KỸ THUẬT </strong>\r\nKích thước: Dài 52cm x Rộng 65cm x Cao 94-101cmChất liệu:\r\n- Khung ghế: nhựa cao cấp\r\n- Tựa lưng và nệm ghế: vải lưới mềm mại thoáng khí<br><br>\r\n2. CHI TIẾT VẬT LIỆU\r\nNhựa cao cấp\r\nKhung ghế, tựa tay và bánh xe được làm bằng nhựa cao cấp có độ bền sử dụng cao\r\n\r\nVải lưới mềm mại thoáng khí\r\nVới chất liệu vải nhập cao cấp, thoáng khí giúp bạn luôn thoải mái dù sử dụng trong nhiều giờ<br><br>\r\n3. ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế lưng trung với chiều cao phổ biến\r\nVới chiều cao linh hoạt có thể thay đổi từ 38 – 45 cm tính từ nệm ghế so với mặt đất, phần lưng trung cao 49 cm rất phù hợp với người Việt Nam.\r\n\r\nGhế xoay văn phòng RIGA\r\n\r\nĐệm ngồi thoáng mát – thiết kế vừa phải<br>\r\nNệm ghế dày 7 cm, sử dụng vải 3 lớp mềm mại dễ dàng vệ sinh, hạn chế bị dơ và đặc biệt mang lại cảm giác êm ái thoải mái khi bạn ngồi trong nhiều giờ.<br>\r\nGhế xoay văn phòng RIGA\r\n\r\nTựa lưng chắc chắn, bo cong mềm mại<br>\r\nVới thiết kế tối ưu, tựa lưng sử dụng chất liệu nhựa PP ', 100, 5),
(29, 'Giường gỗ tràm tự nhiên Majestic', 640.00, 620.00, 'loai_giuong 2-1.jpg', '2023-12-14', '<strong>1. THÔNG SỐ KỸ THUẬT </strong>\r\nKích thước: Dài 52cm x Rộng 65cm x Cao 94-101cmChất liệu:\r\n- Khung ghế: nhựa cao cấp\r\n- Tựa lưng và nệm ghế: vải lưới mềm mại thoáng khí<br><br>\r\n2. CHI TIẾT VẬT LIỆU\r\nNhựa cao cấp\r\nKhung ghế, tựa tay và bánh xe được làm bằng nhựa cao cấp có độ bền sử dụng cao\r\n\r\nVải lưới mềm mại thoáng khí\r\nVới chất liệu vải nhập cao cấp, thoáng khí giúp bạn luôn thoải mái dù sử dụng trong nhiều giờ<br><br>\r\n3. ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế lưng trung với chiều cao phổ biến\r\nVới chiều cao linh hoạt có thể thay đổi từ 38 – 45 cm tính từ nệm ghế so với mặt đất, phần lưng trung cao 49 cm rất phù hợp với người Việt Nam.\r\n\r\nGhế xoay văn phòng RIGA\r\n\r\nĐệm ngồi thoáng mát – thiết kế vừa phải<br>\r\nNệm ghế dày 7 cm, sử dụng vải 3 lớp mềm mại dễ dàng vệ sinh, hạn chế bị dơ và đặc biệt mang lại cảm giác êm ái thoải mái khi bạn ngồi trong nhiều giờ.<br>\r\nGhế xoay văn phòng RIGA\r\n\r\nTựa lưng chắc chắn, bo cong mềm mại<br>\r\nVới thiết kế tối ưu, tựa lưng sử dụng chất liệu nhựa PP ', 101, 5),
(30, 'Bàn caffee gỗ thông cao cấp ', 120.00, 110.00, 'loai_ban 2-1.jpg', '2024-01-06', '<strong>1. THÔNG SỐ KỸ THUẬT </strong>\r\nKích thước: Dài 52cm x Rộng 65cm x Cao 94-101cmChất liệu:\r\n- Khung ghế: nhựa cao cấp\r\n- Tựa lưng và nệm ghế: vải lưới mềm mại thoáng khí<br><br>\r\n2. CHI TIẾT VẬT LIỆU\r\nNhựa cao cấp\r\nKhung ghế, tựa tay và bánh xe được làm bằng nhựa cao cấp có độ bền sử dụng cao\r\n\r\nVải lưới mềm mại thoáng khí\r\nVới chất liệu vải nhập cao cấp, thoáng khí giúp bạn luôn thoải mái dù sử dụng trong nhiều giờ<br><br>\r\n3. ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế lưng trung với chiều cao phổ biến\r\nVới chiều cao linh hoạt có thể thay đổi từ 38 – 45 cm tính từ nệm ghế so với mặt đất, phần lưng trung cao 49 cm rất phù hợp với người Việt Nam.\r\n\r\nGhế xoay văn phòng RIGA\r\n\r\nĐệm ngồi thoáng mát – thiết kế vừa phải<br>\r\nNệm ghế dày 7 cm, sử dụng vải 3 lớp mềm mại dễ dàng vệ sinh, hạn chế bị dơ và đặc biệt mang lại cảm giác êm ái thoải mái khi bạn ngồi trong nhiều giờ.<br>\r\nGhế xoay văn phòng RIGA\r\n\r\nTựa lưng chắc chắn, bo cong mềm mại<br>\r\nVới thiết kế tối ưu, tựa lưng sử dụng chất liệu nhựa PP ', 120, 1),
(31, 'Ghê sofa da sói xám cao cấp', 900.00, 899.00, 'loai_ghe 3-1.jpg', '2023-12-09', '<strong>1. THÔNG SỐ KỸ THUẬT </strong>\r\nKích thước: Dài 52cm x Rộng 65cm x Cao 94-101cmChất liệu:\r\n- Khung ghế: nhựa cao cấp\r\n- Tựa lưng và nệm ghế: vải lưới mềm mại thoáng khí<br><br>\r\n2. CHI TIẾT VẬT LIỆU\r\nNhựa cao cấp\r\nKhung ghế, tựa tay và bánh xe được làm bằng nhựa cao cấp có độ bền sử dụng cao\r\n\r\nVải lưới mềm mại thoáng khí\r\nVới chất liệu vải nhập cao cấp, thoáng khí giúp bạn luôn thoải mái dù sử dụng trong nhiều giờ<br><br>\r\n3. ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế lưng trung với chiều cao phổ biến\r\nVới chiều cao linh hoạt có thể thay đổi từ 38 – 45 cm tính từ nệm ghế so với mặt đất, phần lưng trung cao 49 cm rất phù hợp với người Việt Nam.\r\n\r\nGhế xoay văn phòng RIGA\r\n\r\nĐệm ngồi thoáng mát – thiết kế vừa phải<br>\r\nNệm ghế dày 7 cm, sử dụng vải 3 lớp mềm mại dễ dàng vệ sinh, hạn chế bị dơ và đặc biệt mang lại cảm giác êm ái thoải mái khi bạn ngồi trong nhiều giờ.<br>\r\nGhế xoay văn phòng RIGA\r\n\r\nTựa lưng chắc chắn, bo cong mềm mại<br>\r\nVới thiết kế tối ưu, tựa lưng sử dụng chất liệu nhựa PP ', 111, 1),
(32, 'Bộ bàn ăn gỗ cao cấp', 300.00, 299.00, 'ban_an_1.jpg', '2023-12-23', '<strong>1. THÔNG SỐ KỸ THUẬT </strong>\r\nKích thước: Dài 52cm x Rộng 65cm x Cao 94-101cmChất liệu:\r\n- Khung ghế: nhựa cao cấp\r\n- Tựa lưng và nệm ghế: vải lưới mềm mại thoáng khí<br><br>\r\n2. CHI TIẾT VẬT LIỆU\r\nNhựa cao cấp\r\nKhung ghế, tựa tay và bánh xe được làm bằng nhựa cao cấp có độ bền sử dụng cao\r\n\r\nVải lưới mềm mại thoáng khí\r\nVới chất liệu vải nhập cao cấp, thoáng khí giúp bạn luôn thoải mái dù sử dụng trong nhiều giờ<br><br>\r\n3. ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế lưng trung với chiều cao phổ biến\r\nVới chiều cao linh hoạt có thể thay đổi từ 38 – 45 cm tính từ nệm ghế so với mặt đất, phần lưng trung cao 49 cm rất phù hợp với người Việt Nam.\r\n\r\nGhế xoay văn phòng RIGA\r\n\r\nĐệm ngồi thoáng mát – thiết kế vừa phải<br>\r\nNệm ghế dày 7 cm, sử dụng vải 3 lớp mềm mại dễ dàng vệ sinh, hạn chế bị dơ và đặc biệt mang lại cảm giác êm ái thoải mái khi bạn ngồi trong nhiều giờ.<br>\r\nGhế xoay văn phòng RIGA\r\n\r\nTựa lưng chắc chắn, bo cong mềm mại<br>\r\nVới thiết kế tối ưu, tựa lưng sử dụng chất liệu nhựa PP ', 200, 3),
(33, 'Bàn ăn thông minh thiết kế hiện đại', 300.00, 250.00, 'ban_an_4.jpg', '2023-12-13', '<strong>1. THÔNG SỐ KỸ THUẬT </strong>\r\nKích thước: Dài 52cm x Rộng 65cm x Cao 94-101cmChất liệu:\r\n- Khung ghế: nhựa cao cấp\r\n- Tựa lưng và nệm ghế: vải lưới mềm mại thoáng khí<br><br>\r\n2. CHI TIẾT VẬT LIỆU\r\nNhựa cao cấp\r\nKhung ghế, tựa tay và bánh xe được làm bằng nhựa cao cấp có độ bền sử dụng cao\r\n\r\nVải lưới mềm mại thoáng khí\r\nVới chất liệu vải nhập cao cấp, thoáng khí giúp bạn luôn thoải mái dù sử dụng trong nhiều giờ<br><br>\r\n3. ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế lưng trung với chiều cao phổ biến\r\nVới chiều cao linh hoạt có thể thay đổi từ 38 – 45 cm tính từ nệm ghế so với mặt đất, phần lưng trung cao 49 cm rất phù hợp với người Việt Nam.\r\n\r\nGhế xoay văn phòng RIGA\r\n\r\nĐệm ngồi thoáng mát – thiết kế vừa phải<br>\r\nNệm ghế dày 7 cm, sử dụng vải 3 lớp mềm mại dễ dàng vệ sinh, hạn chế bị dơ và đặc biệt mang lại cảm giác êm ái thoải mái khi bạn ngồi trong nhiều giờ.<br>\r\nGhế xoay văn phòng RIGA\r\n\r\nTựa lưng chắc chắn, bo cong mềm mại<br>\r\nVới thiết kế tối ưu, tựa lưng sử dụng chất liệu nhựa PP ', 300, 3),
(34, 'Bình sịt sữa tắm tự động cao cấp', 20.00, 19.00, 'OIP.jpg', '2023-12-30', '<strong>1. THÔNG SỐ KỸ THUẬT </strong>\r\nKích thước: Dài 52cm x Rộng 65cm x Cao 94-101cmChất liệu:\r\n- Khung ghế: nhựa cao cấp\r\n- Tựa lưng và nệm ghế: vải lưới mềm mại thoáng khí<br><br>\r\n2. CHI TIẾT VẬT LIỆU\r\nNhựa cao cấp\r\nKhung ghế, tựa tay và bánh xe được làm bằng nhựa cao cấp có độ bền sử dụng cao\r\n\r\nVải lưới mềm mại thoáng khí\r\nVới chất liệu vải nhập cao cấp, thoáng khí giúp bạn luôn thoải mái dù sử dụng trong nhiều giờ<br><br>\r\n3. ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế lưng trung với chiều cao phổ biến\r\nVới chiều cao linh hoạt có thể thay đổi từ 38 – 45 cm tính từ nệm ghế so với mặt đất, phần lưng trung cao 49 cm rất phù hợp với người Việt Nam.\r\n\r\nGhế xoay văn phòng RIGA\r\n\r\nĐệm ngồi thoáng mát – thiết kế vừa phải<br>\r\nNệm ghế dày 7 cm, sử dụng vải 3 lớp mềm mại dễ dàng vệ sinh, hạn chế bị dơ và đặc biệt mang lại cảm giác êm ái thoải mái khi bạn ngồi trong nhiều giờ.<br>\r\nGhế xoay văn phòng RIGA\r\n\r\nTựa lưng chắc chắn, bo cong mềm mại<br>\r\nVới thiết kế tối ưu, tựa lưng sử dụng chất liệu nhựa PP ', 110, 4),
(35, 'Gương đèn led cảm ứng thông minh', 129.00, 123.00, 'guong-led-vien-sang-cam-ung-vuong-600x600-2.jpg', '2023-12-14', '<strong>1. THÔNG SỐ KỸ THUẬT </strong>\r\nKích thước: Dài 52cm x Rộng 65cm x Cao 94-101cmChất liệu:\r\n- Khung ghế: nhựa cao cấp\r\n- Tựa lưng và nệm ghế: vải lưới mềm mại thoáng khí<br><br>\r\n2. CHI TIẾT VẬT LIỆU\r\nNhựa cao cấp\r\nKhung ghế, tựa tay và bánh xe được làm bằng nhựa cao cấp có độ bền sử dụng cao\r\n\r\nVải lưới mềm mại thoáng khí\r\nVới chất liệu vải nhập cao cấp, thoáng khí giúp bạn luôn thoải mái dù sử dụng trong nhiều giờ<br><br>\r\n3. ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế lưng trung với chiều cao phổ biến\r\nVới chiều cao linh hoạt có thể thay đổi từ 38 – 45 cm tính từ nệm ghế so với mặt đất, phần lưng trung cao 49 cm rất phù hợp với người Việt Nam.\r\n\r\nGhế xoay văn phòng RIGA\r\n\r\nĐệm ngồi thoáng mát – thiết kế vừa phải<br>\r\nNệm ghế dày 7 cm, sử dụng vải 3 lớp mềm mại dễ dàng vệ sinh, hạn chế bị dơ và đặc biệt mang lại cảm giác êm ái thoải mái khi bạn ngồi trong nhiều giờ.<br>\r\nGhế xoay văn phòng RIGA\r\n\r\nTựa lưng chắc chắn, bo cong mềm mại<br>\r\nVới thiết kế tối ưu, tựa lưng sử dụng chất liệu nhựa PP ', 230, 4),
(36, 'Bộ làm việc văn phòng cao cấp', 120.00, 110.00, 'thanh-ly-ban-ghe-van-phong-o-da-thon-1.jpg', '2023-12-21', '<strong>1. THÔNG SỐ KỸ THUẬT </strong>\r\nKích thước: Dài 52cm x Rộng 65cm x Cao 94-101cmChất liệu:\r\n- Khung ghế: nhựa cao cấp\r\n- Tựa lưng và nệm ghế: vải lưới mềm mại thoáng khí<br><br>\r\n2. CHI TIẾT VẬT LIỆU\r\nNhựa cao cấp\r\nKhung ghế, tựa tay và bánh xe được làm bằng nhựa cao cấp có độ bền sử dụng cao\r\n\r\nVải lưới mềm mại thoáng khí\r\nVới chất liệu vải nhập cao cấp, thoáng khí giúp bạn luôn thoải mái dù sử dụng trong nhiều giờ<br><br>\r\n3. ĐẶC ĐIỂM NỔI BẬT\r\nThiết kế lưng trung với chiều cao phổ biến\r\nVới chiều cao linh hoạt có thể thay đổi từ 38 – 45 cm tính từ nệm ghế so với mặt đất, phần lưng trung cao 49 cm rất phù hợp với người Việt Nam.\r\n\r\nGhế xoay văn phòng RIGA\r\n\r\nĐệm ngồi thoáng mát – thiết kế vừa phải<br>\r\nNệm ghế dày 7 cm, sử dụng vải 3 lớp mềm mại dễ dàng vệ sinh, hạn chế bị dơ và đặc biệt mang lại cảm giác êm ái thoải mái khi bạn ngồi trong nhiều giờ.<br>\r\nGhế xoay văn phòng RIGA\r\n\r\nTựa lưng chắc chắn, bo cong mềm mại<br>\r\nVới thiết kế tối ưu, tựa lưng sử dụng chất liệu nhựa PP ', 100, 2),
(38, 'Kệ TiVi cao cấp', 80.00, 79.00, 'tu ke1.jpg', '2023-12-13', 'Tủ Giày Kệ Ngăn Có Cửa - Elona\r\n1. THÔNG SỐ KỸ THUẬT\r\nDài 900mm x Rộng 200mm x Cao 1295mm\r\n\r\n2. CHI TIẾT VẬT LIỆU\r\nGỗ công nghiệp MDF chuẩn CARP-B2 (*)\r\n\r\n(*) Tiêu chuẩn California Air Resources Board xuất khẩu Mỹ, đảm bảo gỗ không độc hại, an toàn cho sức khỏe.\r\n\r\n3. THÔNG TIN CHI TIẾT\r\nThiết kế thông minh: các ngăn tủ đều có bản lề xoay, giúp đóng mở theo chiều dọc với một góc nghiêng phù hợp giúp bạn lấy hoặc đặt giày một cách thuận tiện hơn.\r\n\r\nNgăn tủ rộng rãi: thiết kế với ngăn tủ 1 tầng, tối ưu hóa diện tích để giày, dép của bạn. Giúp bạn lưu trữ được nhiều đôi giày của bạn hơn hoặc giúp những đôi giày mới trắng tinh của bạn cách xa khỏi những đôi cũ, hạn chế bám bẩn.\r\n\r\nThêm ngăn kệ bên phải: có thêm một ngăn kệ bên phải giúp bạn để thêm những đôi giày bạn hay sử dụng mà không cần phải tốn sức mở hộc tủ. Ngoài ra có thể để các vật dụng khi như mũ bảo hiểm, bình hoa trang trí, các lọ tẩy rửa,…\r\n\r\nTủ Giày Kệ Ngăn Có Cửa - Elona 20\r\n\r\n \r\n\r\nChân có nhựa cao su: giúp di chuyển dễ dà', 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach_hang`
--

CREATE TABLE `khach_hang` (
  `id` int(10) NOT NULL,
  `user` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `idrole` int(10) NOT NULL DEFAULT 2 COMMENT '1.Admin\r\n2.Người dùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`id`, `user`, `pass`, `email`, `avatar`, `address`, `tel`, `idrole`) VALUES
(55, 'Cao Thủ 1', '$2y$10$R8/jtdGfAF2PwEWzx5AHXufDtZgM1777WderALq2..6fJfNw5WwU2', 'Dev1@gmail.com', 'upload/avatar10.jpg', 'Thôn Thế Giới', '0862428354', 2),
(58, 'Đình Mạnh', '12345', 'manhld@gmail.com', 'upload/avatar13.jpg', 'Tu Hoàng', '0862428354', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kich_thuoc`
--

CREATE TABLE `kich_thuoc` (
  `id` int(10) NOT NULL,
  `name_kt` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `kich_thuoc`
--

INSERT INTO `kich_thuoc` (`id`, `name_kt`) VALUES
(4, 'Nhỏ'),
(5, 'Vừa'),
(6, 'Lớn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pttt`
--

CREATE TABLE `pttt` (
  `id` int(11) NOT NULL,
  `name_pttt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `pttt`
--

INSERT INTO `pttt` (`id`, `name_pttt`) VALUES
(1, 'Thẻ tín dụng'),
(2, 'Thanh toán khi nhận hàng'),
(3, 'Chuyển khoản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ptvc`
--

CREATE TABLE `ptvc` (
  `id` int(11) NOT NULL,
  `nam_ptvc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `ptvc`
--

INSERT INTO `ptvc` (`id`, `nam_ptvc`) VALUES
(1, 'Vận chuyển hỏa tốc'),
(2, 'Vận chuyển nhanh'),
(3, 'Vận chuyển thường');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role`
--

CREATE TABLE `role` (
  `id` int(10) NOT NULL,
  `name_role` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `role`
--

INSERT INTO `role` (`id`, `name_role`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_hh` (`idsp`);

--
-- Chỉ mục cho bảng `bien_the`
--
ALTER TABLE `bien_the`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idsp` (`idsp`),
  ADD KEY `idkt` (`idkt`);

--
-- Chỉ mục cho bảng `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idpttt` (`idpttt`),
  ADD KEY `iduser` (`iduser`),
  ADD KEY `idptvc` (`idptvc`);

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_hh` (`idpro`),
  ADD KEY `ma_kh` (`iduser`);

--
-- Chỉ mục cho bảng `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma-kh` (`iduser`),
  ADD KEY `ma_cthh` (`idpro`),
  ADD KEY `idbill` (`idbill`);

--
-- Chỉ mục cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_loai` (`iddm`);

--
-- Chỉ mục cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idrole` (`idrole`);

--
-- Chỉ mục cho bảng `kich_thuoc`
--
ALTER TABLE `kich_thuoc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `pttt`
--
ALTER TABLE `pttt`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ptvc`
--
ALTER TABLE `ptvc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT cho bảng `bien_the`
--
ALTER TABLE `bien_the`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `danh_muc`
--
ALTER TABLE `danh_muc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `kich_thuoc`
--
ALTER TABLE `kich_thuoc`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `pttt`
--
ALTER TABLE `pttt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `ptvc`
--
ALTER TABLE `ptvc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `role`
--
ALTER TABLE `role`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `anh_sp`
--
ALTER TABLE `anh_sp`
  ADD CONSTRAINT `anh_sp_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bien_the`
--
ALTER TABLE `bien_the`
  ADD CONSTRAINT `bien_the_ibfk_1` FOREIGN KEY (`idsp`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bien_the_ibfk_2` FOREIGN KEY (`idkt`) REFERENCES `kich_thuoc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `bill`
--
ALTER TABLE `bill`
  ADD CONSTRAINT `bill_ibfk_1` FOREIGN KEY (`idpttt`) REFERENCES `pttt` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_ibfk_3` FOREIGN KEY (`iduser`) REFERENCES `khach_hang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bill_ibfk_4` FOREIGN KEY (`idptvc`) REFERENCES `ptvc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `binh_luan_ibfk_1` FOREIGN KEY (`idpro`) REFERENCES `hang_hoa` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binh_luan_ibfk_2` FOREIGN KEY (`iduser`) REFERENCES `khach_hang` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hang_hoa`
--
ALTER TABLE `hang_hoa`
  ADD CONSTRAINT `hang_hoa_ibfk_1` FOREIGN KEY (`iddm`) REFERENCES `danh_muc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `khach_hang`
--
ALTER TABLE `khach_hang`
  ADD CONSTRAINT `khach_hang_ibfk_1` FOREIGN KEY (`idrole`) REFERENCES `role` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
