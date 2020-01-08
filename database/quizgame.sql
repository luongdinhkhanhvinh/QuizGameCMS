-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 08, 2020 lúc 10:41 AM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quizgame`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhinhapp`
--

CREATE TABLE `cauhinhapp` (
  `id` int(10) UNSIGNED NOT NULL,
  `co_hoi_sai` int(11) NOT NULL,
  `thoi_gian_tra_loi` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhinhdiemcauhoi`
--

CREATE TABLE `cauhinhdiemcauhoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `thu_tu` int(11) NOT NULL,
  `diem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cauhinhdiemcauhoi`
--

INSERT INTO `cauhinhdiemcauhoi` (`id`, `thu_tu`, `diem`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 2, 3, '2020-01-03 17:20:55', '2020-01-03 17:20:55', NULL),
(2, 7, 3, '2020-01-03 17:21:07', '2020-01-03 17:21:07', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhinhtrogiup`
--

CREATE TABLE `cauhinhtrogiup` (
  `id` int(10) UNSIGNED NOT NULL,
  `loai_tro_giup` int(11) NOT NULL,
  `thu-tu` int(11) NOT NULL,
  `tro_giup` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

CREATE TABLE `cauhoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `noi_dung` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linh_vuc_id` int(11) NOT NULL,
  `phuong_an_a` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_an_b` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_an_c` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phuong_an_d` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dap_an` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`id`, `noi_dung`, `linh_vuc_id`, `phuong_an_a`, `phuong_an_b`, `phuong_an_c`, `phuong_an_d`, `dap_an`, `created_at`, `updated_at`, `deleted_at`) VALUES
(213, 'Trong các con vật sau đây, con nào to nhất?', 1, 'Hổ ', 'Voi ', 'Cá mập ', 'Cá voi xanh ', 'Voi', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(214, 'Trong các con vật sau đây, con nào có khả năng leo trèo?', 1, 'Khỉ ', 'Hổ ', 'Nai ', 'Chó sói', 'Khỉ', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(215, 'Trong các con vật sau đây, con nào được xem là cậu ông trời?', 1, 'Nhái ', 'Ếch ', 'Cóc ', 'Ễnh ương ', 'Cóc', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(216, 'Trong các con vật sau đây, con nào có sừng?', 1, 'Chó sói ', 'Gấu ', 'Hươu ', 'Ngựa vằn', 'Hươu', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(217, 'Trong các loại quả sau đây, quả nào ngọt nhất?', 1, 'Cà chua', 'Bầu ', 'Bưởi ', 'Táo ', 'Táo', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(218, 'Trong các con vật sau đây, con nào chạy nhanh nhất?', 1, 'Rùa ', 'Chó ', 'Mèo', 'Thỏ ', 'Chó', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(219, 'Trong các con vật sau đây, con nào chạy chậm nhất?', 1, 'Thỏ ', 'Dê ', 'Chó ', 'Rùa ', 'Rùa', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(220, 'Con gì sẽ hoá thành muỗi khi trưởng thành?', 1, 'Nòng nọc ', 'Lăng quăng ', 'Giòi ', 'Nhộng', 'Lăng quăng', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(221, 'Trong các con vật sau đây, con nào di chuyển chậm nhất?', 1, 'Rùa ', 'Ốc', 'Rắn ', 'Ếch ', 'Rùa', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(222, 'Trong các con vật sau đây, con nào di chuyển nhanh nhất?', 1, 'Rắn ', 'Thỏ ', 'Dê ', 'Cừu ', 'Thỏ', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(223, 'Con gì có cánh, mà không biết bay, ngày xuống ao chơi, đêm về đẻ trứng?', 1, 'Con gà ', 'Con chim ', 'Con vịt ', 'Con bồ ', 'Con gà', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(224, 'Con gì tám cẳng hai càng?', 1, 'Con Cua', 'Con Cá', 'Con Tôm', 'Con Mực', 'Con cua', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(225, 'Kim loại dẫn điện tốt nhất?', 1, 'Vàng ', 'Bạc ', 'Nhôm ', 'Đồng', 'Vàng', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(226, 'Khoáng chất nào cứng nhất trong các khoáng chất sau?', 1, 'Thạch Anh ', 'Topa ', 'Kim cương ', 'Thạch cao ', 'Kim cương', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(227, 'Trong các chi tiết máy, có tên của con vật nào?', 1, 'Ốc', 'Hến ', 'Tôm ', 'Cua ', 'Ốc', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(228, 'Ở Việt Nam, mùa nào nóng nhất trong năm?', 2, 'Xuân', 'Hạ ', 'Thu ', 'Đông ', 'Hạ', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(229, 'Huyện Nam Đàn thuộc tỉnh nào của Việt Nam?', 2, 'Thanh Hoá', 'Nghệ Tĩnh', 'Hà Tĩnh', 'Nghệ An', 'Nghệ An', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(230, 'Quê hương của Bác Hồ?', 2, 'Nghệ An', 'Nghệ Tĩnh', 'Hà Tĩnh', 'Hà Nội', 'Nghệ An', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(231, 'Hồ Gươm ở đâu?', 2, 'Hà Tĩnh', 'Hà Nam', 'Hà Nội', 'Tp. Hồ Chí Minh', 'Hà Nội', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(232, 'Quần đảo Hoàng Sa và quần đảo Trường Sa thuộc chủ quyền của quốc gia nào?', 2, 'Việt Nam', 'Campuchia', 'Phillippines', 'Indonesia', 'Việt Nam', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(233, 'Thủ đô của nước Việt Nam tên là gì?', 2, 'Hà Tĩnh ', 'Hà Nam ', 'Hà Nội ', 'Hà Đông ', 'Hà Nội', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(234, 'Ở Việt Nam, dân tộc nào có số người đông nhất?', 2, 'Tày', 'Nùng', 'Khơme', 'Kinh', 'Kinh', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(235, 'Việt Nam giáp với Campuchia, Trung Quốc và quốc gia nào?', 2, 'Thái Lan ', 'Malaysia ', 'Lào ', 'Philippines ', 'Lào', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(236, 'Quốc kỳ có hình lá phong là quốc kỳ của quốc gia nào?', 2, 'Việt Nam', 'Brazil', 'Canada', 'Hoa Kỳ ', 'Canada', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(237, 'Đất nước nằm phía nam của Việt Nam là đất nước nào?', 2, 'Malaysia ', 'Thái Lan ', 'Myanmar ', 'Camphuchia ', 'Campuchia', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(238, 'Quốc kỳ Việt nam có hình gì?', 2, 'Hoa sen', 'Chiếc nón ', 'Ngôi sao ', 'Hoa mai ', 'Hoa Sen', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(239, 'Miền Bắc Việt Nam có bao nhiêu mùa trong năm?', 2, '3', '4', '5', '6', '4', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(240, 'Đất nước nằm phía Tây Nam nước ta là đất nước nào?', 2, 'Brunei ', 'Trung Quốc ', 'Lào ', 'Thái Lan ', 'Lào', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(241, 'Đảo Phú Quốc ở vịnh Thái Lan thuộc chủ quyền của quốc gia nào?', 2, 'Thái Lan ', 'Campuchia ', 'Việt Nam ', 'Malaysia ', 'Việt Nam', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(242, 'Vịnh Hạ Long trước thuộc tỉnh nào của Việt Nam?', 2, 'Quảng Bình', 'Hải Phòng', 'Quảng Trị', 'Quảng Ninh', 'Quang Ninh', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(243, 'Điền tiếp vào câu tục ngữ sau: Chớp đông nhay nháy, gà gáy thì ....?', 3, 'Toi', 'Mưa', 'Nắng', 'Râm', 'Mưa', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(244, 'Danh từ nào sau đây là tên một loài chim?', 3, 'Họa sĩ', 'Họa tiết', 'Họa mi', 'Họa bì', 'Họa mi', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(245, 'Điền tiếp vào câu thành ngữ để chỉ vẻ đẹp: Chim sa cá ....?', 3, 'Nổi', 'Nhảy', 'Lặn', 'Bơi', 'Lặn', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(246, 'Điền tiếp vào câu thành ngữ: Cơn đằng đông vừa trông vừa ...?', 3, 'Sợ', 'Chạy', 'Trốn', 'Tắm', 'Chạy', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(247, 'Điền tiếp vào câu thành ngữ: Con kiến mà kiện ...?', 3, 'Con voi', 'Củ khoai', 'Đầu gối', 'Hộp đường', 'Con voi', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(248, 'Điền vào chỗ trống: Đi với bụt mặc áo cà sa, đi với ma mặc áo ...?', 3, 'Áo dài', 'Áo giấy', 'Áo lụa', 'Áo gió', 'Áo giấy', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(249, 'Điền tiếp vào câu tục ngữ: Đi một ngày đàng, ...?', 3, 'Gặp toàn hàng ngon', 'Mệt rũ chân tay', 'Học một sàng khôn', 'Vớ toàn điều xui', 'Học một sàng khôn', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(250, 'Điền tiếp vào câu tục ngữ: Đói cho sạch, rách cho ...?', 3, 'Thơm', 'Lành', 'Vuông', 'No', 'Thơm', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(251, 'Điền tiếp vào câu tục ngữ: Đời cha ăn mặn, đời con ...?', 3, 'Ăn nhạt', 'Khát nước', 'Ăn cay', 'Chết đói', 'Khát nước', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(252, 'Điền tiếp vào câu tục ngữ: Chết ... còn hơn sống nhục?', 3, 'Trong', 'Xanh', 'Vinh', 'Sướng', 'Vinh', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(253, 'Điền tiếp vào câu thành ngữ: Kẻ cắp gặp ...?', 3, 'Bà già', 'Công an', 'Thương binh', 'Nông dân', 'Bà già', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(254, 'Điền tiếp vào câu tục ngữ: Lo bò ... răng?', 3, 'Đen', 'Trắng', 'Sáng', 'Sứt', 'Trắng', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(255, 'Điền tiếp vào câu tục ngữ: Không thầy đố mày ...?', 3, 'Học ngu', 'Dạy ai', 'Làm nên', 'Đi chơi', 'Làm nên', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(256, 'Điền tiếp vào câu tục ngữ: Khôn nhà, dại ...?', 3, 'Vườn', 'Trường', 'Cửa', 'Chợ', 'Chợ', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(257, 'Điền tiếp vào câu tục ngữ: Một giọt ... hơn ao nước lã?', 3, 'Axit', 'Bazo', 'Máu đào', 'Nước thánh', 'Máu đào', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(258, 'Bài hát Da nâu do ca sĩ nào thể hiện?', 4, 'Ngô Thanh Vân', 'Phi Thanh Vân', 'Nguyễn Thanh Vân', 'Đặng Thanh Vân', 'Phi Thanh Vân', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(259, 'Đoàn quân Việt Nam đi trong lòng cứu quốc là câu hát trong bài hát nào?', 4, 'Quốc tế ca', 'Quốc ca', 'Lá xanh ', 'Đồng chí ', 'Quốc ca', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(260, 'Quốc ca của Việt Nam là bài hát nào?', 4, 'Hành quân xa', 'Tiến Quân ca', 'Khúc hát hành quân', 'Khúc hát thanh niên', 'Tiến Quân ca', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(261, 'Hẹn gặp nhé giữa Sài Gòn là câu hát cuối trong bài hát nào?', 4, 'Lá xanh ', 'Lá đỏ ', 'Tình ca ', 'Người Hà Nội ', 'Lá đỏ', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(262, 'Bài hát Tình ca của Hoàng Việt nhắc đến mùa nào trong năm?', 4, 'Xuân ', 'Hạ ', 'Thu ', 'Đông ', 'Đông', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(263, 'Ca sĩ / nhóm nhạc nào thể hiện ca khúc One Love?', 4, 'Westlife', 'Backstreet Boys', 'Blue', 'Elton John', 'Blue', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(264, 'Ca sĩ nào thể hiện thành công bài hát Everytime? ', 4, 'Pink', 'Katy Perry', 'Britney Spears ', 'Mariah Carey', 'Mariah Carey', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(265, 'Ca sĩ Mariah Carey thể hiện thành công ca khúc When you believe với ca sĩ nào?', 4, 'Whitney Houston', 'Sharah Corner ', 'Diana Rose', 'Britney Spears', 'Whitney Houston', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(266, 'Bài hát Dancing Queen nổi tiếng của nhóm nhạc nào thể hiện?', 4, 'The Beatles ', 'Carpenters ', 'ABBA', 'Dream Girls ', 'ABBA', '2020-01-03 05:04:02', '2020-01-03 05:04:02', NULL),
(267, 'Bài hát My love do ca sĩ/nhóm nhạc nào thể hiện? ', 4, 'Blue ', 'Lee Ryan ', 'Westlife', 'N Sync ', 'Westlife', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(268, 'Sau Extremely, nhóm nhạc nhóm nhạc nào cover thành công bài hát More Than Words? ', 4, 'The Click5 ', 'Westlife ', 'Simple Plan ', 'Linkin Park ', 'Westlife ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(269, 'Bài hát Baby One More Time do ca sĩ nào thể hiện? ', 4, 'Christina Aguilera ', 'Beyoncé ', 'Lady Gaga', 'Britney Spears ', 'Britney Spears ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(270, 'Bài hát một đời người, một rừng cây là nhạc sỹ nào?', 4, 'Trần Long Ẩn', 'Trần Hoàn ', 'Hoàng Việt ', 'Phạm Minh Tuấn ', 'Trần Long Ẩn', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(271, 'Bài hát Một trái tim, một tấm lòng do nhạc sĩ nào sáng tác?', 4, 'Trần Tiến ', 'Trần Hiếu ', 'Thế Hiển ', 'Hoàng Lân ', 'Thế Hiển ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(272, 'Bài hát Tiến quốc ca trở thành quốc ca của nước ta vào năm bao nhiêu?', 4, '1944', '1945', '1946', '1954', '1945', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(273, 'Tác phẩm nào sau đây là của nhà văn nổi tiếng Ngô Thừa Ân?', 5, 'Thuỷ Hử ', 'Tam Quốc Diễn Nghĩa ', 'Tây Du Ký ', 'Hồng Lâu Mộng ', 'Tây Du Ký', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(274, 'Tết gì trẻ em đốt đèn đi chơi khắp phố phường, xóm làng?', 5, 'Tết Nguyên Đán ', 'Tết Nguyên Tiêu ', 'Tết Trung Thu ', 'Tết Hàn thực', 'Tết Trung Thu ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(275, 'Tết cổ truyền cùa người Việt Nam diễn ra vào mùa nào trong năm?', 5, 'Xuân ', 'Hạ ', 'Thu ', 'Đông', 'Xuân ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(276, 'Đơn vị tiền tệ của người Việt Nam hiện đang sử dụng là gì?', 5, 'Xu', 'Hào', 'Cắc', 'Đồng', 'Đồng ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(277, 'Hồ Chí Minh từng là gì đối với đất nước Việt Nam?', 5, 'Tổng bí thư', 'Chủ tịch nước', 'Thủ tướng', 'Nhà ngoại gia', 'Chủ tịch nước ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(278, 'Trong các ngày dưới đấy, ngày nào là ngày quốc tế phụ nữ?', 5, '09.09', '03.08', '08.03', '20.10', '20.10 ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(279, 'Ngày 0101 âm lịch là ngày gì của người Việt Nam?', 5, 'Tết Nguyên Tiêu', 'Tết Trung Thu ', 'Tết Hàn Thực ', 'Tết Nguyên Đán ', 'Tết Nguyên Đán ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(280, 'Ngày 1-5 là ngày kỉ niệm gì?', 5, 'Quốc tế lao động', 'Quốc tế phụ nữ', 'Giải phóng miền Nam ', 'Chiến thắng Điện Biên Phủ ', 'Quốc tế lao động', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(281, 'Ở nước ta, tình trạng thiếu việc làm là nét đặc trưng của khu vực?', 5, 'Đồng bằng ', 'Miền núi ', 'Thành thị ', 'Nông thôn ', 'Miền núi ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(282, 'Thế vận hội mùa đông năm 1992 được tổ chức ở quốc gia nào?', 5, 'Thụy Điển', 'Pháp ', 'Na Uy ', 'Nhật Bản ', 'Nhật Bản ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(283, 'Thế vận hội mùa đông năm 1992 được tổ chức ở quốc gia nào?', 5, 'Thụy Điển', 'Pháp ', 'Na Uy ', 'Nhật Bản ', 'Nhật Bản ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(284, 'Thế vận hội mùa đông năm 1992 được tổ chức ở quốc gia nào?', 5, 'Thụy Điển', 'Pháp ', 'Na Uy ', 'Nhật Bản ', 'Nhật Bản ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(285, 'Tác giả của tiểu thuyết Tru Tiên?', 5, 'Kim Dung ', 'Tiêu Đỉnh ', 'Cổ Long ', 'Ngoạ Long Sinh ', 'Kim Dung ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(286, 'Tom và Jerrry, bộ phim hoạt hình quen thuộc với bao thế hệ người xem đã được bắt đầu sản xuất từ năm?', 5, '1950 ', '1970 ', '1940 ', '1930 ', '1940', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(287, 'Di Hoà Viên  nơi đây nổi tiếng về nghệ thuật hoa viên truyền thống của Trung Quốc. Nó đã tồn tại bao nhiêu năm?', 5, '700 năm ', '800 năm ', '900 năm ', '1000 năm ', '800 năm', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(288, 'Nhạc Jazz bắt nguồn từ nước nào?', 5, 'Áo ', 'Đức ', 'Thuỵ Sĩ', 'Thổ Nhĩ Kỳ ', 'Áo ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(289, 'Tỉ lệ người trưởng thành ở quốc gia nào biết chữ thấp nhất thế giới?', 5, 'Cuba ', 'Guinea Xích Đạo ', 'Mali ', 'Senegal ', 'Senegal', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(290, 'Ngày 26/12/2004, một trận động đất mạnh 9.0 độ richter xảy ra tại nơi nào?', 6, 'Kamchatka Nga', 'QĐ Andreanof Hoa Kỳ', 'Sumatra Indonesia', 'Assam Tây Tạng', 'Sumatra Indonesia', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(291, 'Hoá tệ kim loại xuất hiện từ khi nào?', 6, 'Từ cuối thế kỷ 19 ', 'Từ cuối thế kỷ 18 ', 'Đầu thế kỷ 17 ', 'Thế kỷ 16 ', 'Đầu thế kỷ 17 ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(292, 'Trương Vĩnh Ký được ghi trong Bách khoa Tự điển Larousse và là một trong 18 văn hào thế giới thế kỷ 19. Ông thông thạo bao nhiêu thứ tiếng?', 6, '12', '18', '26', '33', '18', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(293, 'Ngày 27/03/1964, một trận động đất mạnh 9.2 độ richter xảy ra tại nơi nào?', 6, 'Alaska Hoa Kỳ', 'Sumatra Indonesia', 'Colombia  Ecuador', 'Lisboa Bồ Đào Nha', 'Alaska Hoa Kỳ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(294, 'Đại Hí Viện Colosseum trưng bày 5000 thú dữ ngày khánh thành, xây dựng năm 80 trước công nguyên ở quốc gia nào?', 6, 'Ai Cập ', 'Hy Lạp ', 'Ấn Độ ', 'Italia', 'Italia', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(295, 'Khu di tích lịch sử Đền Hùng bao gồm bao nhiêu đền chính?', 6, '2', '3', '5', '7', '5', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(296, 'Ngày 16/10/1737, một trận động đất mạnh 9.3 độ richter xảy ra tại nơi nào?', 6, 'Chile', 'Indonesia', 'Nga ', 'Trung Quốc', 'Nga ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(297, 'Tường biên giới Hadrian, một bình phong khổng lồ kéo dài trên đỉnh núi, xây dựng thê kỷ 2 công nguyên ở quốc gia nào?', 6, 'Pháp ', 'Anh ', 'Ai Cập ', 'Hy Lạp ', 'Anh ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(298, 'Ai tự xưng mình là Hậu Lý Nam Đế?', 6, 'Lý Phật Tử ', 'Lý Bí ', 'Lý Công Uẩn ', 'Lý Chiêu Hoàng ', 'Lý Phật Tử ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(299, 'Vua Quang Trung đã đánh tan 29 vạn quân Thanh vào năm nào?', 6, '1600 ', '1789 ', '1801', '1812', '1789 ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(300, 'Karaoke do ông Inoue Daisuke người Nhật phát minh vào năm 1971, khi đó ông bao nhiêu tuổi?', 6, '31', '32', '33', '34', '31', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(301, 'Liên minh Việt  Miên  Lào được thành lập vào ngày tháng năm nào?', 6, '11/3/1951', '3/3/1951', '13/3/1951', '21/3/1951', '3/3/1951', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(302, 'SEA  Games lần thứ 5 năm 1967, quốc gia nào đăng cai?', 6, 'Malaysia ', 'Thái Lan ', 'Indonesia ', 'Myanmar ', 'Myanmar ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(303, 'SEA  Games lần thứ 25 năm 2009, quốc gia nào đăng cai?', 6, 'Thái Lan ', 'Lào ', 'Việt Nam ', 'Philippines ', 'Lào ', '2020-01-03 05:04:03', '2020-01-03 05:04:03', NULL),
(304, 'Năm bác Hồ đọc bản tuyên ngôn độc lập khai sinh ra nước Việt Nam dân chủ cộng hòa là bao nhiêu?', 6, '1945', '1954', '1957', '1975', '1945', '2020-01-03 17:18:58', '2020-01-03 17:23:48', '2020-01-03 17:23:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietluotchoi`
--

CREATE TABLE `chitietluotchoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `luot_choi_id` int(11) NOT NULL,
  `cau_hoi_id` int(11) NOT NULL,
  `phuong_an` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `goicredit`
--

CREATE TABLE `goicredit` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_goi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `credit` int(11) NOT NULL,
  `so_tien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `goicredit`
--

INSERT INTO `goicredit` (`id`, `ten_goi`, `credit`, `so_tien`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bạc', 300, 20000, '2020-01-03 17:20:06', '2020-01-03 17:20:06', NULL),
(2, 'Vàng', 450, 50000, '2020-01-03 17:20:17', '2020-01-03 17:20:17', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichsumuacredit`
--

CREATE TABLE `lichsumuacredit` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguoi_choi_id` int(11) NOT NULL,
  `goi_credit_id` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `so_tien` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `linhvuc`
--

CREATE TABLE `linhvuc` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_linh_vuc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `linhvuc`
--

INSERT INTO `linhvuc` (`id`, `ten_linh_vuc`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Khoa Học', '2020-01-03 03:36:52', '2020-01-03 03:36:52', NULL),
(2, 'Địa Lý', '2020-01-03 03:36:52', '2020-01-03 03:36:52', NULL),
(3, 'Văn Học', '2020-01-03 03:36:52', '2020-01-03 03:36:52', NULL),
(4, 'Âm Nhạc', '2020-01-03 03:36:52', '2020-01-03 03:36:52', NULL),
(5, 'Văn hóa-Nghệ thuật', '2020-01-03 03:36:52', '2020-01-03 03:36:52', NULL),
(6, 'Lịch Sử', '2020-01-03 03:36:52', '2020-01-03 03:36:52', NULL),
(7, 'Sinh Học', '2020-01-03 04:04:49', '2020-01-03 04:04:49', NULL),
(8, 'Hóa Học', '2020-01-03 17:14:24', '2020-01-03 17:14:24', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `luotchoi`
--

CREATE TABLE `luotchoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nguoi_choi_id` int(11) NOT NULL,
  `so_cau` int(11) NOT NULL,
  `diem` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ngay_gio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_10_22_142556_create_table_linh_vuc', 1),
(4, '2019_10_23_081919_create_table_lich_su_mua_credit', 1),
(5, '2019_10_23_081955_create_table_nguoi_choi', 1),
(6, '2019_10_23_082027_create_table_goi_credit', 1),
(7, '2019_10_23_082112_create_table_cau_hoi', 1),
(8, '2019_10_23_082148_create_table_chi_tiet_luot_choi', 1),
(9, '2019_10_23_082258_create_table_luot_choi', 1),
(10, '2019_10_23_082328_create_table_cau_hinh_diem_cau_hoi', 1),
(11, '2019_10_23_082352_create_table_cau_hinh_app', 1),
(12, '2019_10_23_082422_create_table_quan_tri_vien', 1),
(13, '2019_10_23_082446_create_table_cau_hinh_tro_giup', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nguoichoi`
--

CREATE TABLE `nguoichoi` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_dang_nhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh_dai_dien` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `diem_cao_nhat` int(11) NOT NULL DEFAULT 0,
  `credit` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nguoichoi`
--

INSERT INTO `nguoichoi` (`id`, `ten_dang_nhap`, `mat_khau`, `email`, `hinh_dai_dien`, `diem_cao_nhat`, `credit`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user', '$2y$10$QV2ohB3ug6FNGnQG4XM4SeEJBDAUhBIcdlxTU4dqg1dzl.1zQMrZS', 'q@gmail.com', 'a.jpg', 1111, 11, '2020-01-03 03:41:11', '2020-01-03 03:41:11', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantrivien`
--

CREATE TABLE `quantrivien` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_dang_nhap` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mat_khau` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ho_ten` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quantrivien`
--

INSERT INTO `quantrivien` (`id`, `ten_dang_nhap`, `mat_khau`, `ho_ten`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', '$2y$10$QV2ohB3ug6FNGnQG4XM4SeEJBDAUhBIcdlxTU4dqg1dzl.1zQMrZS', 'admin', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cauhinhapp`
--
ALTER TABLE `cauhinhapp`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cauhinhdiemcauhoi`
--
ALTER TABLE `cauhinhdiemcauhoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cauhinhtrogiup`
--
ALTER TABLE `cauhinhtrogiup`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chitietluotchoi`
--
ALTER TABLE `chitietluotchoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `goicredit`
--
ALTER TABLE `goicredit`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `lichsumuacredit`
--
ALTER TABLE `lichsumuacredit`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `luotchoi`
--
ALTER TABLE `luotchoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `nguoichoi`
--
ALTER TABLE `nguoichoi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nguoichoi_ten_dang_nhap_unique` (`ten_dang_nhap`),
  ADD UNIQUE KEY `nguoichoi_email_unique` (`email`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `quantrivien`
--
ALTER TABLE `quantrivien`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `quantrivien_ten_dang_nhap_unique` (`ten_dang_nhap`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cauhinhapp`
--
ALTER TABLE `cauhinhapp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cauhinhdiemcauhoi`
--
ALTER TABLE `cauhinhdiemcauhoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `cauhinhtrogiup`
--
ALTER TABLE `cauhinhtrogiup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT cho bảng `chitietluotchoi`
--
ALTER TABLE `chitietluotchoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `goicredit`
--
ALTER TABLE `goicredit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `lichsumuacredit`
--
ALTER TABLE `lichsumuacredit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `linhvuc`
--
ALTER TABLE `linhvuc`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `luotchoi`
--
ALTER TABLE `luotchoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `nguoichoi`
--
ALTER TABLE `nguoichoi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `quantrivien`
--
ALTER TABLE `quantrivien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
