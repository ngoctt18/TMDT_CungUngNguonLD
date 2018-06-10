-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 10, 2018 lúc 04:09 PM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tmdt`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Ngoc Tran', 'tuanngoc@gmail.com', 989789876, 'hello babe !!! hhhh', '2018-06-09 15:14:53', '0000-00-00 00:00:00', 1),
(6, 'Cud Tao', 'cudlo@gmail.com', 989789987, 'Website !!!', '2018-06-09 15:24:05', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` tinyint(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_cover` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL,
  `auth_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `title`, `sub_title`, `body`, `post_cover`, `created_at`, `updated_at`, `status`, `auth_id`) VALUES
(1, '“Quản trị” biến nhân viên thành người phi thường, “quản lý” biến người phi thường thành kẻ tầm thường', 'Quản trị biến nhân viên bình thường thành người phi thường', '<p><b>Giáo sư Phan Văn Trường sinh năm 1946 tại Hải Dương. Ông là chuyên gia cao cấp trong lĩnh vực đàm phán quốc tế và là cố vấn của Chính phủ Pháp về thương mại quốc tế. Ông được Tổng thống Pháp trao tặng Huy chương Hiệp Sĩ Bắc Đẩu Bội Tinh năm 2007. Ông từng lãnh đạo tại các tập đoàn Alsthom Power, Alsthom Transport, Suez, Lyonnaise-BOT, Wah Seong. Trong một buổi chia sẻ mới đây, Giáo sư Phan Văn Trường có dịp kể lại thời gian làm lãnh đạo đầy ly kì ở tập đoàn năng lượng đa quốc gia Alsthom Power. </b></p>\r\n\r\n<p><b>Quản trị biến nhân viên bình thường thành người phi thường</b></p>\r\n\r\n<p>“Cả phía bên trái của người đó bằng nhựa hết do từng bị tàu metro nghiến,” Giáo sư kể.\r\n\r\nKhi Giáo sư Phan Văn Trường ( lúc ấy là Phó Tổng giám đốc của Alsthom Power ) nhìn thấy năng lực của người đó và gọi anh ta đến, người này trông như “ngựa bất kham” nói: “Hãy để tôi yên.”</p>\r\n\r\n<p>Nhưng Giáo sư bảo:</p>\r\n<p>– Anh không có chân trái tay trái tôi mới gọi anh ra.</p>\r\n\r\n<p>Người này rất ngạc nhiên. Giáo sư nói tiếp:</p>\r\n\r\n<p>– Vì không có tay trái chân trái mà còn tồn tại đến ngày nay thì phi thường rồi, tôi cần những người phi thường.</p>\r\n\r\n<p>Nghe vậy, người này rất xúc động, liền đồng ý hợp tác. Về sau chính người khuyết tật đó đã tận tâm cống hiến, góp phần giúp Alsthom Power thắng được siêu dự án với giá trị hàng tỉ đô la.</p>\r\n\r\n<p>“Quản trị là tạo động lực,” Giáo sư Phan Văn Trường</p>\r\n\r\n<p>Giáo sư nói: “Từ những con người rất tầm thường, thậm chí kém cỏi, mình biến họ thành anh hùng”.</p>\r\n\r\n<p>Bình thường mình chỉ rút từ một nhân viên khoảng 60%. Nhưng những người có động lực cao thì mình có thể lấy được 120, 140% từ năng lực năng lượng của họ.</p>\r\n\r\n<p>“Mà ngược lại, nếu mình không quản trị giỏi mà quản lý, thì chính những nhân viên đó có thể trở thành những người tầm thường, nếu không muốn nói là đôi khi kém cỏi,” Giáo sư Phan Văn Trường nhận định.</p>\r\n\r\n<p><img src=\"https://vieclam24h.vn/cam-nang-nghe-nghiep/wp-content/uploads/2018/06/quan-tri-bien-nhan-vien-binh-thuong-thanh-nguoi-phi-thuong-quan-ly-bien-nguoi-phi-thuong-thanh-ke-tam-thuong-hinh-anh-1.jpg\"></p>\r\n\r\n<p>Theo Giáo sư, trong những công ty lớn thường có tình trạng người “cất trong tủ” là vì thế: Họ rất tài năng nhưng không muốn hợp tác, bản thân họ nản và không tin vào người lãnh đạo, dẫn đến không đóng góp được gì cho đội ngũ.</p>\r\n\r\n<p>Giáo sư nói thêm, từ việc biến một người bình thường thành phi thường, nghệ thuật quản trị có thể giúp một một tập thể bình thường “làm được những điều kinh khủng trên thế gian.”</p>\r\n<p>Khi mình có năng lượng, năng lực của người đó thì người ta sẵn sàng làm việc nhóm, sẵn sàng trao đổi. Tức là công ty của mình không chỉ có nhiều người giỏi, mà là tập thể còn gấp đôi lần ba lần tập thể trước kia giữa những người không có động lực.</p>\r\n\r\n<p><b>Nếu không quản trị mà quản lý thì đội ngũ có “bao nhiêu người cũng không đủ”</b></p>\r\n\r\n<p>Giáo sư ví dụ:\r\n\r\nKhi một đội 10 người than thiếu người, thường thường do 10 người không làm việc nổi với nhau. Mất 60% thời gian để đánh nhau rồi.</p>\r\n<p>Khi quản lý, nếu bảo 10 người không đủ thì mình thêm 3 người nữa, thành 13 người nhưng không bao giờ đủ cả, vẫn thấy thiếu.</p>\r\n\r\n<p>Giáo sư Phan Văn Trường cho biết, khi càng thiếu người và càng thêm người thì người lãnh đạo của đội đó lại càng thích mướn người, bởi vì lúc đó người ta đi vào vòng luẩn quẩn. Họ cho rằng họ càng đông người thì càng có vị trí lớn trong công ty. “Tức là người quan liêu tự nuôi tính quan liêu của người ta” Giáo sư nhận định.</p>\r\n\r\n<p><b>Quản trị tốt là lập đội ngũ vừa đủ. Đội leo núi nhanh nhất là đội không thiếu không thừa</b></p>\r\n<p>Quản lý rất dễ, giáo sư nói, “Cứ ngồi đó thôi, rồi gọi người vào, tao cho mày làm phụ tá, mày làm việc tao kiểm soát, cứ kiểm soát ra kiểm soát vào. Công ty năm được năm không, năm tốt năm xấu. Nói chung là lai rai.”</p>\r\n\r\n<p>Lãnh đạo thấp lâu lâu thì thắng. Người quản trị giỏi thì bách chiến bách thắng, Giáo sư kết luận.</p>\r\n\r\n<p>Qua những chia sẻ của Giáo sư Phan Văn Trường, Việc Làm 24h mong bạn sẽ có thêm kinh nghiệm để xây dựng bộ máy nhân sự hoạt động hiểu quả hơn. Chúc bạn thành công.</p>\r\n', 'public/img/news1.jpg', '2018-06-10 08:24:32', '0000-00-00 00:00:00', 1, 1),
(3, 'Người trẻ dùng cả tuổi thanh xuân để thử nhảy việc, đáng hay không?', 'Người trẻ Nhảy việc để làm gì?', '<p><b>Tại sao khi có được một công việc ổn định trong bối cảnh việc làm khan hiếm như hiện giờ, thì bạn trẻ lại phải từ bỏ? Nhảy việc để thay đổi và xa lánh những chán chường trong công việc, để nếm mùi của cuộc sống đa sắc, để xốc lại tinh thần hoặc tìm cơ hội mới đang dần trở thành xu hướng \"hot\" của giới trẻ. Vậy đâu là câu trả lời cho vấn đề này?</b></p>\r\n<p>Là một nhà tuyển dụng, tôi đã từng hỏi hàng trăm bạn trẻ câu hỏi “Lý do gì bạn nhảy việc?”. Rất nhiều câu trả lời trong số đó: “Công ty cũ có môi trường nhàm chán, không có thách thức mới trong công việc.”, “Sếp em rất khó chịu.”, “Lương khá thấp so với nỗ lực của em.”… Sau đó tôi hỏi “Vậy bây giờ em sẽ làm gì?” thì câu trả lời thường là ấm úng và không rõ ràng.</p>\r\n<p>Có lẽ đây là một câu hỏi gây ra khá nhiều tranh cãi bây giờ, khi mà giới trẻ ngày nay thường theo xu hướng xê dịch và thích khám phá, tìm tòi những điều mới mẻ, ít ai muốn thụ động một chỗ và làm những công việc mà bản thân cảm thấy gò bó và không phù hợp. Tuy nhiên thì cũng có không ít bạn yêu thích sự ổn định, không muốn bản thân có quá nhiều thử thách.</p>\r\n\r\n<p><b>1. Nhảy việc để làm gì?</b></p>\r\n<p>Tại sao khi có được một công việc, mà có khi là rất khó để kiếm được trong bối cảnh việc làm khan hiếm như hiện giờ, thì lại phải bỏ nó? Tất nhiên là chẳng ai tự động bỏ việc cả, chúng ta chỉ nhảy việc khi mà cảm thấy bản thân không phù hợp với công việc này mà thôi.</p>\r\n<p>Nhảy việc để thay đổi và xa lánh những chán chường trong công việc, để nếm mùi của cuộc sống đa sắc, để xốc lại tinh thần hoặc tìm cơ hội mới. Nhảy việc là một sự mạo hiểm, nhưng nó cũng đổi lại được rất nhiều thứ đấy chứ. Hãy tìm ra một chữ ĐỂ thật là xứng đáng cho bản thân mình khi quyết định thay đổi công việc.</p>\r\n\r\n<p><center><img src=\"https://vieclam24h.vn/cam-nang-nghe-nghiep/wp-content/uploads/2018/06/nguoi-tre-dung-ca-tuoi-thanh-xuan-de-thu-nhay-viec-dang-hay-khong-hinh-anh-1.jpg\"></center></p>\r\n<p><b>2. Vậy khi nào thì nhảy việc?</b></p>\r\n<p>Như tôi đã nói ở trên, chúng ta không thể cứ hứng lên là nhảy việc được. Nhảy việc khi không còn gì để học hỏi và trải nghiệm từ cái cũ. Nếu như trong công việc, chúng ta không còn gì để sáng tạo và phát huy năng lực bản thân nữa, thì còn động lực nào để cố gắng?</p>\r\n\r\n<p>Tuy nhiên, làm bao lâu để nhận ra được điều đó, tôi nghĩ ít nhất cũng phải làm một năm cho một công việc trước khi rời đi. Làm sao bản thân lại biết là mình không còn gì để học hỏi ở đây nữa khi mới làm được có 2 hay 3 tháng?</p>\r\n<p>Ngoài ra cũng còn một lí do ngoại cảnh khác để nhảy việc, đó là yếu tố về đồng nghiệp hay sếp. Môi trường làm việc trong lành cũng khá quan trọng, phải không? Và còn một lựa chọn an toàn hơn khi nhảy việc, là khi đã tìm được một công việc mới, tôi cho rằng đó là một thời điểm quá hoàn hảo.</p>\r\n<p><b>Nhưng mà chúng ta không thể dành cả thanh xuân để nhảy việc được đúng không, vậy khi nào thì dừng lại?</b></p>\r\n\r\n\r\n<p>Không thể làm một năm ở đây rồi nghỉ, tiếp một năm ở kia lại nhảy việc. Bạn nên biết điểm dừng của bản thân, khi nhận ra đi đâu cũng vậy. Cá nhân tôi nhận thấy thì chỉ nên dành hai năm để trải nghiệm bản thân với những công việc mới thôi.</p>\r\n<p>Tuổi trẻ của chúng ta ngắn lắm, làm sao mà lông bông mãi được. Còn nếu làm ở đâu cũng cảm thấy chán hay là không thể thích ứng nổi, thì phải xem lại bản thân mình, vấn đề nằm ở mình chứ không phải là do công việc. Làm việc gì cũng cần có ít nhất một yếu tố thuyết phục nhất từ trước tới giờ để ở lại: con người, lương bổng hay làm vì đam mê.</p>\r\n<p>Hãy nhìn xem mục đích của bản thân là gì. Hãy nên tự hỏi bản thân: rời khỏi đây thì có làm được gì nữa không, nếu như đã nhảy việc quá nhiều lần rồi. Và còn một thực tại luôn hiện hữu: Nhảy việc là đói.</p>\r\n\r\n<p>Tôi biết ý kiến chủ quan của bản thân nên cũng không thể hợp ý với tất cả mọi người được. Lời cuối, tôi muốn khuyên các bạn là còn trẻ thì nên nhảy việc, nhưng vẫn phải cân nhắc thật kĩ mọi yếu tố xung quanh vì xét cho cùng thì chúng ta đều là người trưởng thành rồi, cần có bản lĩnh để chịu trách nhiệm cho mọi quyết định của bản thân.</p>\r\n<p>Và cuối cùng, dù ở đâu và làm việc cho ai, cũng phải thể hiện hiện hết năng lực và bản lĩnh nội tại, như vậy người ta mới tôn trọng mình.</p>\r\n<p>Chúc các bạn luôn tìm được một công việc phù hợp với bản thân và có được những trải nghiệm đáng giá của tuổi trẻ!</p>', 'public/img/news2.png', '2018-06-10 08:24:57', '0000-00-00 00:00:00', 1, 1),
(5, 'Những khoản phúc lợi cần quan tâm bên cạnh mức lương mà bạn cần biết', 'Nếu muốn mình giữ được sự vui vẻ lâu dài với công việc thì bạn cần biết rằng phúc lợi cũng quan trọng như mức lương vậy', '<p><b>Nếu muốn mình giữ được sự vui vẻ lâu dài với công việc thì bạn cần biết rằng phúc lợi cũng quan trọng như mức lương vậy. Nhưng đâu là những phúc lợi chúng ta nên đề nghị khi bước vào giai đoạn đàm phán lương bổng?</b></p>\r\n\r\n<p><b>1. Bảo hiểm xã hội và y tế</b></p>\r\n<p>Đầu tiên phải nhắc đến các chế độ bảo hiểm xã hội và y tế. Dù biết rằng đây là một yêu cầu nhà nước bắt buộc tất cả doanh nghiệp phải thực hiện cho nhân viên nhưng bạn hãy nên đặt câu hỏi để biết rõ rằng bên cạnh mức lương thì mình sẽ được đóng bảo hiểm đầy đủ hay không, bảo hiểm y tế áp dụng ở mức quy định tối thiểu hay có bổ sung các quyền lợi như khám sức khoẻ định kỳ, bảo hiểm răng miệng và thị giác, bảo hiểm cho người thân.</p>\r\n<p>Điều này sẽ giúp ích cho bạn khá nhiều trong việc cân nhắc khi “chọn lương Gross hay Net” để có được thoả thuận hợp lý và tương xứng nhất với mong muốn của bản thân.</p>\r\n<p><center><img src=\"https://vieclam24h.vn/cam-nang-nghe-nghiep/wp-content/uploads/2018/06/nhung-khoan-phuc-loi-can-quan-tam-ben-canh-muc-luong-ma-ban-can-biet-hinh-anh-1.png\"></center></p>\r\n<p><b>2. Lợi ích phụ trợ</b></p>\r\n\r\n<p>Tiếp đến là các loại phụ cấp hoặc lợi ích phụ trợ mà công ty chủ động lên ngân sách và kế hoạch để chăm sóc đời sống nhân viên. Các đãi ngộ này có thể khá phổ thông như: phụ cấp ăn trưa, xăng xe, điện thoại, chính sách công tác phí “rộng rãi”, quà tặng sinh nhật – ma chay – hiếu hỉ, chương trình nghỉ mát hàng năm, các chương trình thúc đẩy tinh thần đội nhóm (team-building) theo bộ phận.</p>\r\n\r\n<p>Nếu điều kiện tốt hơn, công ty còn có thể cung cấp các phúc lợi truyền cảm hứng như: “Thứ Sáu Vui Vẻ” (Happy Friday) hoặc hướng đến đời sống tinh thần như xây dựng phòng thư giãn, phòng giải trí, phòng thể dục thể thao, căn tin miễn phí để nhân viên tuỳ nghi sử dụng.</p>\r\n<p><b>3. Chương trình sức khoẻ toàn diện</b></p>\r\n<p>Bảo hiểm y tế là phúc lợi cơ bản mà bạn sẽ không quá khó khăn để sở hữu. Nhưng các “đặc quyền” liên quan đến sức khoẻ không chỉ có vậy mà bạn còn có thể sẽ gặp được những nhà tuyển dụng có các chương trình bổ sung nhằm chăm sóc sức khoẻ toàn diện cho nhân viên. <br>\r\n\r\nThẻ thành viên câu lạc bộ thể hình, phí tham gia lớp học thiền hoặc tập yoga, vé tham dự hội thảo chuyên đề sống lành mạnh, khoá tư vấn cai thuốc lá, các chính sách giúp cân bằng cuộc sống… là những phúc lợi mà nhiều công ty đang áp dụng cho nhân viên của mình.</p>\r\n<p><b>4. Ngày nghỉ và ngày phép</b></p>\r\n<p>Quan điểm quản lý nhân sự sẽ tác động tới những lợi ích liên quan đến giờ giấc và phong cách làm việc. Hãy cố gắng đặt ra những câu hỏi nhằm xác định xem công ty mà bạn dự định gia nhập có phải là mô hình mang dáng dấp quân đội không. Nếu đúng như vậy, hãy chuẩn bị tinh thần để rèn luyện tác phong chuẩn mực, tận hưởng khuôn khổ và áp dụng các chế độ nghỉ bệnh – nghỉ phép – nghỉ việc đúng như luật định.</p>\r\n\r\n\r\n<p>Trong khi đó, nếu là người ưa thích tự do và may mắn tìm được một công ty quản lý nhân viên theo tư duy mở, chúc mừng bạn đã có thêm đãi ngộ mà giá trị khi quy đổi ra thực tế không hề nhỏ. Ví dụ như: việc các sếp “bật đèn xanh” cho phép nhân viên làm việc từ xa, làm theo thời gian biểu linh động hoặc có thể nghỉ phép theo giờ…</p>\r\n\r\n<p>Bên cạnh đó, việc tăng số lượng ngày phép năm hưởng nguyên lương cũng như cho nghỉ lễ dài hơn quy định chính là lợi ích được đông đảo nhân viên đánh giá cao.</p>\r\n<p>Xem xét một đề nghị, đừng vội coi lương là tất cả rồi “bỏ chạy” ngay khi nghe được con số có vẻ thấp so với kỳ vọng. Hãy đảm bảo rằng bạn đã tìm hiểu đủ thông tin về các đãi ngộ kèm theo của công ty, họ có thể dành cho bạn những phúc lợi tốt đến như thế nào. Đôi khi, “lùi một bước” với mức lương ít hơn nhưng bạn sẽ nhận lại môi trường làm việc vui vẻ đủ sự thoải mái với những phúc lợi tuyệt vời có thể tiếp thêm động lực giúp bạn tập trung hoàn thành nhiệm vụ không chút băn khoăn.</p>\r\n\r\n\r\n\r\n\r\n', 'public/img/news3.png', '2018-06-10 08:22:30', '0000-00-00 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` tinyint(4) DEFAULT '1' COMMENT '1- chưa giao; 2- đã giao; 3- bị hủy'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `username`, `post_id`, `created_at`, `status`) VALUES
(9, 'ntv', 12, '2018-06-10 07:02:51', 1),
(10, 'jobseeker', 12, '2018-06-10 08:13:52', 1),
(11, 'jobseeker', 10, '2018-06-10 08:13:59', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_cover` varchar(255) NOT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `JobType` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `AgeRequest` varchar(255) DEFAULT NULL,
  `GenderRequest` varchar(255) DEFAULT NULL,
  `DegreeRequest` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `description` text,
  `benefit` text,
  `FileRequest` text,
  `deadline` text,
  `another` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL COMMENT '0 - Draft; 1 - Active; 2 - Delete',
  `auth_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `sub_title`, `body`, `post_cover`, `salary`, `experience`, `JobType`, `location`, `AgeRequest`, `GenderRequest`, `DegreeRequest`, `amount`, `description`, `benefit`, `FileRequest`, `deadline`, `another`, `created_at`, `updated_at`, `status`, `auth_id`) VALUES
(6, 'Tuyển Quản Lý Nhà Hàng', 'Tuyển Quản Lý  cho Nhà Hàng', 'Tuyển Nhân viên Quản Lý  cho Nhà Hàng Minh Đức', '', '7 - 10 triệu', 'Có kinh nghiệm làm quản lý nhà hàng.', ' Toàn thời gian cố định', ' Việc làm Hà Nội', '25 - 35 tuổi', 'Không yêu cầu', 'Không yêu cầu bằng cấp', '1', '- Đảm bảo chất lượng phục vụ khách hàng:\r\n- Điều khiển toàn bộ hoạt động phục vụ khách hàng trong nhà hàng.\r\n- Giám sát, nhắc nhở và hướng dẫn đội ngũ nhân viên thực hiện công việc.\r\n- Thường xuyên giao tiếp với khách hàng để nắm bắt thị hiếu, tâm lý và khẩu vị của khách. Với những đoàn khách quan trọng, quản lý nhà hàng phải ra chào đón khách, trực tiếp điều hành quá trình phục vụ và tiễn khách.\r\n- Trực tiếp giải quyết các khiếu nại, thắc mắc của khách hàng.\r\n- Nắm và hiểu rõ các ‘chương trình khuyến mãi” tại nhà hàng để giải thích cho khách hàng và truyền đạt cho nhân viên', '- Chế độ lương thưởng hấp dẫn, phù hợp năng lực. \r\n- Chế độ phúc lợi theo quy định của nhà nước.\r\n- Môi trường làm việc chuyên nghiệp.\r\n- Khả năng thăng tiến cao.', 'Ưu tiên nộp hồ sơ trực tuyến qua hệ thống Hoặc gửi CV mô tả quá trình học tập và làm việc về email liên hệ.', '30/06/2018', '- Nam, tuổi từ 20 - 45, sức khỏe tốt\r\n- Có khả năng làm việc luân phiên theo ca (có cả ca ngày và ca đêm)\r\n- Nhanh nhẹn, trung thực, có khả năng làm việc theo ca', '2018-06-10 09:55:17', '0000-00-00 00:00:00', 1, 2),
(7, 'Tuyển Nhân Viên Bảo Vệ', 'Tuyển Nhân Viên Bảo Vệ tại Nhà hàng Nét Huế', 'Tuyển Nhân Viên Bảo Vệ tại Nhà hàng Nét Huế', '', '5 - 7 triệu', 'Chưa có kinh nghiệm', 'Theo hợp đồng tư vấn', 'Việc làm Hà Nội', '25 - 29 tuổi', 'Nam', 'Không yêu cầu bằng cấp', '20', 'Công việc: Trông, dắt và xếp xe ở nhà hàng, vệ sinh khu vực làm việc, bảo vệ tài sản của nhà hàng, hỗ trợ các công việc khác khi có sự điều động của quản lý cơ sở.\r\nCông việc cụ thể trao đổi khi phỏng vấn.', 'Tháng đầu thử việc hưởng lương 16k / h, sau thử việc hưởng lương 17k / h. Thu nhập giao động từ 5tr - 6tr', 'Ưu tiên nộp hồ sơ trực tuyến qua hệ thống Hoặc gửi CV mô tả quá trình học tập và làm việc về email liên hệ.', '30/12/2018', 'GIAO TIẾP TỐT, CÓ THÁI ĐỘ NIỀM NỞ, VUI VẺ + Có sức khỏe tốt, không tệ nạn xã hội, không tiền án tiền sự, trung thực, chăm chỉ, nhanh nhẹn và có trách nhiệm với công việc. Ưu tiên người có kinh nghiệm.', '2018-06-10 04:27:00', '0000-00-00 00:00:00', 1, 28),
(10, 'Tuyển Nhân Viên phục Vụ Bàn', 'Tuyển Nhân Viên phục Vụ Bàn tại Hà Nội', 'Tuyển Nhân Viên phục Vụ Bàn theo ca tại Hà Nội', '', ' 5 - 7 triệu', 'Chưa có kinh nghiệm', 'Bán thời gian cố định', 'Việc làm Hà Nội', 'Không yêu cầu độ tuổi', 'Không yêu cầu', 'Không yêu cầu bằng cấp', '15', '- Chào đón khách và cung cấp thông tin về thực đơn.\r\n- Nhận order đồ ăn, đồ uống và thực hiện các thủ tục cần thiết.\r\n- Quan sát khách hàng để nắm bắt và thực hiện việc đáp ứng các yêu \r\ncầu của khách hàng kịp thời đảm bảo khách hàng được hài lòng\r\nLàm việc 17-23h. Phong cách làm việc văn minh - lịch sự - dân trí cao', 'Mức lương: 5 triệu + thưởng hàng tháng\r\n- Được đào tạo các nghiệp vụ quy trình phục vụ khách hàng.\r\n- Môi trường làm việc năng động, chuyên nghiệp.\r\n- Cơ hội thăng tiến cao\r\n- Trao đổi cụ thể trong quá trình phỏng vấn', 'Ưu tiên nộp hồ sơ trực tuyến qua hệ thống của Hoặc gọi điện trao đổi trực tiếp', '30/06/2018', '- Nhanh nhẹn, trung thực, năng động.\r\n- Khả năng giao tiếp, xử lý tình huống tốt.\r\n- Mong muốn gắn bó lâu dài', '2018-06-10 04:47:42', '0000-00-00 00:00:00', 1, 28),
(12, 'Tuyển Thợ Hàn Có Đào Tạo', 'Tuyển gấp Thợ Hàn Có Đào Tạo', 'Tuyển gấp 4 Thợ Hàn Có Đào Tạo', '', ' 7 – 10 triệu', '2 năm', 'Toàn thời gian cố định', 'Việc làm Hà Nội', 'Không yêu cầu độ tuổi', 'Không yêu cầu', ' Không yêu cầu bằng cấp', '4', '- Hàn các sản phẩm biển quảng cáo\r\n- Được hướng dẫn khi nhận việc\r\n- Công việc cụ thể trao đổi trong quá trình phỏng vấn', '- Thu nhập cao theo năng lực\r\n- Hỗ trợ cơm trưa \r\n- Thưởng hiệu quả công việc hàng tháng\r\n- Ưu tiên người muốn gắn bó lâu dài với công việc.\r\n- Thưởng các ngày Lễ, Tết, sinh nhật…Du Xuân, nghỉ Mát hàng năm theo quy định.\r\n- Xét tăng lương 1-2 lần / năm', '-	SYLL. -	Giấy khám sức khỏe. -	CMND -	Bản sao giấy khai sinh. -	Sổ hộ khẩu. -	Giấy xác nhận nhân sự của chính quyền địa phương.', '15/07/2018', '- Nhanh nhẹn, hoạt bát và nhiệt tình trong công việc.\r\n- Có kinh nghiệm Hàn.\r\n- Ưu tiên người từng làm cho các công ty thi công biển bảng quảng cáo.', '2018-06-10 09:54:58', '0000-00-00 00:00:00', 1, 2),
(14, 'Tuyển Thợ Sơn', 'Tuyển Thợ Sơn tại Công ty TNHH Kinh doanh Ô tô NISU', 'Công ty TNHH Kinh doanh Ô tô NISU Tuyển Thợ Sơn tại Hà Nội', '', '8 – 10 triệu', 'Dưới 1 năm', ' Toàn thời gian cố định', 'Việc làm Hà Nội', ' 25 - 29 tuổi', 'Nam', 'Trung học', '5', '- Sơn sửa các loại xe ô tô theo yêu cầu\r\n- Chủ yếu sơn gầm xe\r\n- Được đào tạo thêm về tay nghề\r\n- Sẽ trao đổi thêm khi phỏng vấn', '- Mức thu nhập : Thỏa thuận \r\n- Được hưởng tất cả các chế độ theo luật Lao động Nhà nước và chế độ theo quy định của Công ty\r\n- Được hưởng mức lương hấp dẫn xứng đáng với năng lực làm việc\r\n- Được hỗ trợ một bữa cơm trưa \r\n- Môi trường làm việc năng động, thân thiện và chuyên nghiệp, có cơ hội phát triển bản thân.', 'Ưu tiên nộp hồ sơ trực tuyến qua hệ thống Hoặc gửi CV mô tả quá trình học tập và làm việc về email liên hệ.', '30/08/2018', '- Có kinh nghiệm 01 năm trở lên về công việc sơn \r\n- Sức khỏe tốt.\r\n- Năng động sáng tạo, chủ động trong công việc.\r\n- Có tính kỷ luật cao.\r\n- Địa điểm làm việc: Long Biên', '2018-06-10 08:18:44', '0000-00-00 00:00:00', 1, 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `namecompany` varchar(255) DEFAULT NULL,
  `representative` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` int(11) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `skill` text,
  `type_user` int(11) DEFAULT NULL COMMENT '1-admin; 2-công ty; 3-người lđ',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` int(11) NOT NULL COMMENT '1 - Còn tồn tại; 2 - Đã xuất'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `namecompany`, `representative`, `email`, `username`, `password`, `phone`, `address`, `skill`, `type_user`, `created_at`, `updated_at`, `status`) VALUES
(1, 'Công ty TNHH Adminmistrator', 'Admin', 'trantuanngoctn97@gmail.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 975853528, 'Văn Giang, Hưng Yên', 'Học hỏi, làm việc nhóm, lập trình...', 1, '2018-06-10 08:18:40', '0000-00-00 00:00:00', 1),
(2, 'Công Ty TNHH Thương Mại Điện Tử', 'Ngoc Tran', 'sau8chin66@gmail.com', 'ngoctt', 'e10adc3949ba59abbe56e057f20f883e', 987654321, 'Bắc Từ Liêm, Hà Nội', 'Học hỏi, chăm chỉ, lập trình,...', 2, '2018-06-10 08:18:18', '0000-00-00 00:00:00', 1),
(28, 'Công ty TNHH MTV DV TM Minh Đức', 'Lô Minh Đức', 'cudlont2@gmail.com', 'ntd', 'e10adc3949ba59abbe56e057f20f883e', 165825965, 'Như Thanh, Thanh Hóa', NULL, 2, '2018-06-10 04:14:46', '0000-00-00 00:00:00', 1),
(29, NULL, 'Người Tìm Việc', 'ntv@gmail.com', 'ntv', 'e10adc3949ba59abbe56e057f20f883e', 2147483647, 'Hà Tây', 'Lập trình PHP, chăm chỉ, làm việc nhóm', 3, '2018-06-10 05:14:58', '0000-00-00 00:00:00', 1),
(34, NULL, 'Nguyễn Văn An', 'annv@gmail.com', 'jobseeker', 'e10adc3949ba59abbe56e057f20f883e', 123456789, '360 Hai Bà Trưng, Hà Nội', 'Chăm chỉ, cần cù, chịu khó', 3, '2018-06-10 08:13:36', '0000-00-00 00:00:00', 1),
(35, 'ntd1', 'ntd1', 'trantuanngoctn97@gmail.com', 'ntd1', 'e10adc3949ba59abbe56e057f20f883e', 0, 'ntd1', NULL, 2, '2018-06-10 08:15:21', '0000-00-00 00:00:00', 1),
(36, NULL, 'ntv3', 'jobseeker@gmail.com', 'ntv3', 'e10adc3949ba59abbe56e057f20f883e', 0, 'ntv3', 'ntv3', 3, '2018-06-10 08:35:23', '0000-00-00 00:00:00', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` tinyint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
