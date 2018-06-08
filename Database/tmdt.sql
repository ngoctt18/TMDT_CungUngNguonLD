-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 08, 2018 lúc 02:53 PM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

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
  `name` varchar(60) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL COMMENT '0 - Unread; 1 - Read; 2 - Delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `created_at`, `updated_at`, `status`) VALUES
(0, 'Ngoc Tran', 'trantuanngoctn97@gmail.com', '0975858585', 'sadf ', '2018-05-30 04:13:25', '0000-00-00 00:00:00', 0),
(0, 'Ngọc ăn ***', 'ngoccc@gmail.com', '123456789', 'Haizzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz', '2018-05-30 04:42:21', '0000-00-00 00:00:00', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `sub_title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_cover` varchar(255) NOT NULL,
  `salary` int(11) DEFAULT NULL,
  `experience` varchar(255) DEFAULT NULL,
  `JobType` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `AgeRequest` varchar(255) DEFAULT NULL,
  `GenderRequest` varchar(255) DEFAULT NULL,
  `DegreeRequest` varchar(255) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL,
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

INSERT INTO `posts` (`id`, `user_id`, `title`, `sub_title`, `body`, `post_cover`, `salary`, `experience`, `JobType`, `location`, `AgeRequest`, `GenderRequest`, `DegreeRequest`, `amount`, `description`, `benefit`, `FileRequest`, `deadline`, `another`, `created_at`, `updated_at`, `status`, `auth_id`) VALUES
(1, NULL, 'Quán cà phê \'cảm nhận về cái chết\' ở Thái Lan', 'Đi dọc hành lang có các câu hỏi về cuộc sống hay nằm trong quan tài và suy nghĩ là trải nghiệm kỳ lạ dành cho du khách tại quán cà phê', '<p>Kid Mai Death Awareness Cafe ở Bangkok, là quán cà phê đặc biệt, nơi khách hàng có thể tham gia vào trải nghiệm \"nhận thức về cái chết\". Trong đó, nổi bật nhất là việc thử nằm trong một quan tài màu trắng, đặt ở giữa quán...</p>\r\n\r\n<p>Đây là quán cà phê có không gian mở, trang trí với cây xanh, ao cá, tượng Phật, nội thất hiện đại cùng danh sách đồ ăn, thức uống không giống nơi đâu.</p>\r\n\r\n<p>Thực đơn của quán là các loại đồ uống được đặt tên theo chủ đề liên quan đến cái chết như \"cái chết\", \"ra đời\", \"đau đớn\", \"một năm còn lại\" hay \"ngày cuối cùng\".</p>\r\n\r\n<p>Bên cạnh các loại đồ uống với tên gọi lạ, quán còn có nhiều loại bánh kẹo hình dạng kỳ quặc, được bày bán để giáo dục mọi người về cái chết. “Tôi cảm thấy giống như mình đang ở trong một đám tang”, Duanghatai Boonmoh, 28 tuổi, chia sẻ khi đang nếm thử một viên “kẹo tử thần” tại quán.</p>\r\n\r\n<p>Chia sẻ về quán cà phê, Veeranut Rojanaprapa, chủ nhân của quán nói rằng, ý tưởng quán cà phê \"cảm nhận về cái chết\" của ông không phải là một chiêu dụ khách hàng hay đánh bóng tên tuổi mà là một phần trong luận án tiến sĩ về triết học và tôn giáo của mình.</p>', 'https://znews-photo-td.zadn.vn/w960/Uploaded/jaroin/2018_05_22/4C659270000005785602057imagea21_1526645225767_1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-01 09:45:35', '0000-00-00 00:00:00', 1, 1),
(2, NULL, 'Nỗi niềm an ủi tâm hồn của cỏ cây', 'Lối viết văn mềm mại, gợi mở nhiều không gian êm ái xanh ngắt cây cối của Trương Huỳnh Như Trân khiến việc đọc mang lại cảm giác thật nhẹ nhõm.', '<p>Thiên nhiên là “nguồn cội cảm hứng sáng tác của tôi”. Danh họa Monet từng vẽ hàng trăm bức tranh đượm phong vị tự nhiên, rực rỡ màu sắc đã khẳng định như vậy. Hơn bất kì ai, ông là người say đắm thiên nhiên, say đắm từng gốc cây, từng đóa hoa, ngọn cỏ.</p>\r\n\r\n<p>Chính bản thân ông đã thiết kế, chăm sóc và tạo dựng nên khu vườn ở Gyverny, một khu vườn tuyệt đẹp đến nay đã trở thành một tác phẩm được yêu thích của thế giới. Monet cũng đã từng nói: “Trong đời tôi phải luôn luôn, luôn luôn có hoa”.</p>\r\n\r\n<p>Cũng như Monet, danh họa Van Gogh từng vẽ rất nhiều về thiên nhiên. Những bức tranh nổi tiếng của ông có Hoa diên vĩ, Cánh đồng lúa mì và cây trắc bá, Hoa hướng dương….</p>\r\n\r\n<p>Những năm cuối đời ông sống trong một ngôi làng nhỏ, hàng ngày mang giá vẽ ra cánh đồng để vẽ, ông xem những ngày sống giữa thiên nhiên ấy là những ngày thực sự được an ủi tâm hồn.</p>\r\n\r\n<p>Thuở trước, Marcel Proust khi thưởng thức chiếc bánh madeleine được nhúng trong cốc trà pha với những cánh hoa đoan đã rơi vào cảm xúc ngổn ngang những chuyện xưa cũ, để rồi khắc khoải viết cuốn sách Đi tìm thời gian đã mất.</p>\r\n\r\n<p>Hay chuyện mùa xuân ở đất nước Nhật Bản, hoa anh đào rụng đã trở thành biểu tượng xuất hiện ở rất nhiều vần thơ, đoạn văn, như Basho từng viết:\r\n\r\n“Từ phương trời xa\r\n\r\nCánh hoa đào rơi lả tả\r\n\r\nGợn sóng hồ Biwa”.</p>\r\n\r\n<p>Thiên nhiên đã trở thành một niềm an ủi sâu thẳm của mỗi con người, đã đi vào văn học, nghệ thuật như một tâm hồn thứ hai, nhiều yêu mến và trăn trở. Trong tập sách nhỏ bé của mình, tác giả Trương Huỳnh Như Trân cũng đã bộc bạch những tâm tư của mình dành cho thiên nhiên.</p>\r\n\r\n<p>Tập sách Khi quá buồn hãy tưới nước cho một cái cây, tập hợp những bài viết ngắn nhỏ của tác giả, được viết bằng giọng văn gần gũi, đơn giản những đậm chất thơ, khiến cho cuộc sống giản dị được biện bày trong một không khí thật thi vị.</p>', 'https://znews-photo-td.zadn.vn/w660/Uploaded/qfssu/2018_05_22/cea4cc721a9df4c3ad8c_1.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-01 09:46:35', '0000-00-00 00:00:00', 1, 1),
(3, NULL, 'Muôn cách tận hưởng mùa hè của giới trẻ', 'Mùa hè tuy nóng nực nhưng lại là khoảng thời gian lý tưởng để bạn trẻ tham gia các hoạt động trải nghiệm và thư giãn.', '<p>Thay vì ngồi than vãn về thời tiết, các bạn trẻ đã tìm ra không ít cách hay ho để tận hưởng khoảng thời gian này.</p>\r\n\r\n<p>Khám phá những địa điểm mới\r\nMùa hè là thời điểm tuyệt vời để ghé thăm những thiên đường du lịch. Nếu yêu thích biển xanh, cát trắng, nắng vàng, bạn đừng quên đến Nha Trang, Đà Nẵng hay đảo Phú Quốc. Thả dáng dưới ánh nắng và thưởng thức những ly cocktail tuyệt vời là cách thư giãn lý tưởng sau thời gian dài làm việc căng thẳng.</p>\r\n\r\n<p>Còn nếu muốn tìm kiếm những trải nghiệm thú vị, vùng núi cao Tây Bắc hay Sapa sẽ là gợi ý cho bạn. Không chỉ là cách làm mới tinh thần, du lịch sẽ giúp bạn thêm hiểu biết về những vùng đất mới và có thêm nhiều kỷ niệm thú vị.</p>\r\n\r\n<p>Kích hoạt hormone hạnh phúc\r\nĐối với những bạn không muốn ở lì trong nhà hay chưa có điều kiện đi du lịch, tham gia một số hoạt động thể thao sẽ là ý kiến không tồi. Một số môn thể thao được nhiều bạn trẻ ưa thích gồm: bóng đá, bơi lội, bóng rổ... Ngoài ra, tập gym cũng là một lựa chọn khá thú vị. </p>\r\n\r\n<p>Khi tập thể dục, cơ thể sẽ tiết ra endorphine, hay còn được biết với tên gọi là “hormone hạnh phúc”. Endorphine tạo cảm giác thư thái, phấn chấn, lạc quan yêu đời, tăng cường sức đề kháng, giảm cơn đau, căng thẳng và làm chậm quá trình lão hóa.</p>\r\n\r\n<p>Thư giãn ngay tại nhà\r\nĐối với những bạn trẻ không thích các hoạt động ngoài trời, việc tận hưởng mùa hè ở nhà vẫn là sự lựa chọn hoàn hảo.</p>\r\n\r\n<p>Tất cả những gì bạn cần để tận hưởng ngày nghỉ trọn vẹn là một không gian thoáng mát, chọn một bộ phim hấp dẫn hay một quyển sách hay cùng vài món snack để nhâm nhi. Nếu muốn không khí sôi động hơn, bạn có thể rủ hội cạ cứng cùng tụ tập và tham gia một số trò chơi vui nhộn hay quay clip độc đáo làm kỷ niệm.</p>\r\n\r\n<p>Với những bạn giàu tâm hồn nghệ thuật, sơn lại phòng hay thử phong cách trang trí mới sẽ giúp bạn cảm thấy thoải mái, yêu đời hơn.</p>\r\n\r\n<p>Mua hàng tại nhà với một cú click\r\nMua hàng online và sử dụng dịch vụ giao hàng tận nhà là cách được nhiều người lựa chọn để không phải ra đường ngày nắng. Thấu hiểu nhu cầu này của người tiêu dùng, không ít hãng sản xuất đã áp dụng chính sách bán hàng online và giao hàng nhanh. Trong đó, Pepsi - thương hiệu nước giải khát được nhiều bạn trẻ yêu thích cũng áp dụng chiến lược này.</p>\r\n\r\n<p>Cụ thể, Pepsi hợp tác cùng Tiki mang đến chiến dịch “giải nhiệt” hấp dẫn với phương thức “lấy độc trị độc”. Theo đó, nhiệt độ tăng càng cao, giá Pepsi trên Tiki sẽ càng được giảm sâu. Đây là cơ hội để fan của thức uống này có thể sưu tập trọn bộ 5 mẫu lon theo phong cách retro từ Pepsi.</p>', 'https://znews-photo-td.zadn.vn/w660/Uploaded/wyhktpu/2018_05_22/image001_5.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-01 09:59:00', '0000-00-00 00:00:00', 1, 2),
(4, NULL, 'Con gái 30 tuổi có nhất định phải lấy chồng?', 'Chia sẻ của một cô gái 9X đời đầu chưa muốn lấy chồng, cùng lắm sẽ kiếm tiền sau này ở trại dưỡng lão nhận được sự quan tâm của dư luận.', '<p>Mới đây, trên trang NEU Confessions một bạn trẻ tâm sự về hôn nhân nhận được 7.000 lượt like (thích) và gần 600 lượt chia sẻ. Người đồng cảm với cô gái vì tư tưởng yêu thích cuộc sống tự do, có người lại cho rằng cô có cái nhìn cực đoan.</p>\r\n\r\n<p>Cuộc sống độc thân rất hạnh phúc\r\nTheo đó, cô gái là 9X đời đầu, tốt nghiệp đại học xin việc ở một cơ quan Nhà nước ở quê, vì học hành tử tế nên được xếp vào danh sách dễ lấy chồng.</p>\r\n\r\n<p>Nhưng người tính không bằng trời tính, các chàng trai lần lượt tấn công qua số điện thoại, nhiều đến nỗi có hôm cô gái để quên điện thoại ở nhà, buổi tối về bị sập nguồn luôn. \r\n\r\n9X tâm sự, mọi người bảo cô kén chọn, nhưng cô không biết người đến tán tỉnh là ai, không nhớ mặt, không nhớ tên. Cô đơn giản chỉ là không muốn lấy chồng, hoặc chính xác hơn là không muốn lấy chồng theo cách như vậy.\r\n\r\nCô gái lý giải những người đến tán cô, chắc chắn không yêu cô mà chỉ nhìn vào công việc ổn định, có thời gian chăm sóc “những đứa con và bố mẹ của họ”.\r\n\r\n“Nói khó nghe hơn là họ cưới mình về để nấu cơm, đẻ con và giúp họ chăm sóc gia đình”, cô chia sẻ.</p>\r\n\r\n<p>Cô gái không chấp nhận sự thật đó, chỉ muốn chơi vài năm rồi mới lấy chồng. Trong vài năm đó, bạn bè của cô đã lấy chồng hết, thậm chí có người còn kịp ly hôn. Bản thân cô ngày càng không muốn lấy chồng, yêu tự do, thích ăn thì ăn, ngủ thì ngủ, cuối tuần chán thì xách balo lên và đi.\r\n\r\n“Cuộc sống của mình rất tự do và hạnh phúc, không phải nhìn sắc mặt của người khác để sống. Còn mấy đứa bạn mình, họ đang diễn lại bộ phim Sống chung với mẹ chồng\", cô tâm sự.</p>\r\n\r\n<p>Không đủ can đảm\r\nTrong chia sẻ của mình, cô gái kể ra những trường hợp để chứng tỏ cuộc sống độc thân của mình vô cùng hạnh phúc.\r\n\r\nMột số người bạn của cô có gia đình, có công việc ổn định cũng không thể đi du lịch vì ở nhà gặt giúp mẹ chồng, không đi làm ruộng thì bị chửi là lười, không đi liên hoan vì nấu cơm cho chồng, ở lại làm thêm cũng bị mẹ chồng chửi vì trốn việc.</p>\r\n\r\n<p>Một số người khác không có việc làm ổn định thì rất… nhục. Vừa nấu cơm, đẻ con, chăm con nhưng vẫn bị mang tiếng ăn bám chồng. Mẹ chồng còn bảo “một người đi làm mà nuôi tận 3 người thì tiền đâu mà nuôi?”, rồi bị chửi là lười.</p>\r\n\r\n<p>Với những người đẻ toàn con gái, mẹ chồng bảo \"Cái giống nhà tao nó không như vậy, chắc nó giống mẹ nó nên mới không biết đẻ\". Khi đứa thứ hai mới được hơn một năm, mẹ chồng đã giục xem mà chửa đẻ đi, để lâu lại không đẻ được.</p>\r\n\r\n<p>“Trong khi hai đứa mới cưới nhau, hầu như chỉ có chồng đi làm thôi, hai vợ chồng đẻ liền tù tì 3 năm 2 đứa thì lấy đâu thời gian mà đi làm. Vậy nên hai vợ chồng muốn kế hoạch, tập trung làm kinh tế trước, khi nào kinh tế ổn định mới tính đến chuyện đẻ tiếp.</p>\r\n\r\n<p>Mẹ chồng bảo ngày xưa tao với bố chúng mày cũng chẳng có công ăn việc làm gì, bố đi xây mẹ ở nhà mà vẫn nuôi chúng mày khôn lớn. Người chồng cãi lại, bảo vì vậy nên nhà mình mới nghèo, con cái không được học hành tử tế. Thế là mẹ chồng tru tréo lên, chửi là mày nghe vợ mày, mày láo với bố mẹ. Mặt nặng mày nhẹ với nhau vài tháng, vợ chồng quyết định ra ở riêng, thuê nhà ngoài mặt đường, vừa ở vừa buôn bán. Còn mẹ chồng thì đi khắp làng rao rêu là ông bà thông gia không biết dạy con”, cô gái kể.</p>\r\n\r\n<p>Cô gái kể lại người em họ của mình bị mang thai ngoài tử cung, khi phẫu thuật bị đau còn chưa đứng lên được, mẹ chồng đã nói: “Ai biết là họ có cắt đi hay không (ý là cắt buồng trứng)? Vợ thằng X cũng bị như vậy, giờ nó lấy vợ khác, đẻ được hai thằng con trai giống bố như đúc”.</p>\r\n\r\n<p>“Với một đứa con gái U30 như mình, tình yêu là một thứ xa vời. Nhưng mình quyết định sẽ không vì tuổi tác mà gật đầu kết hôn với một người không có tình cảm. Mình sẽ lấy chồng, với điều kiện đó là người mình yêu, vì yêu người đó mà mình sẵn sàng hy sinh tự do cá nhân để làm vợ, làm mẹ, cùng người đó xây dựng gia đình. Còn nếu không, mình sẽ không lấy chồng nữa, sống độc thân, tận hưởng cuộc sống, cố gắng kiếm tiền để nếu có sống được tới già thì vẫn có tiền vào viện dưỡng lão ở”, cô gái 9X đời đầu tâm sự.</p>\r\n\r\n\r\n<p>Cô bày tỏ, nhiều người bảo không sống được thì ly hôn. Nhưng cô nghĩ, nếu đã sẵn sàng ly hôn mà vẫn cưới, thì chính là không tôn trọng đối tác của mình. Ly hôn chẳng khác gì một vết sẹo trong cuộc đời. Mình có thể chấp nhận cuộc đời mình có sẹo, nhưng đối tác của mình chắc gì đã chấp nhận? Mình có quyền gì mà làm hỏng cuộc đời của họ?</p>\r\n\r\n<p>Hạnh phúc hay không là do mình quyết định\r\nChia sẻ của cô gái U30 nhận được sự quan tâm của cộng đồng mạng. Bạn Phạm Khương Tú Uyên viết cô có chung suy nghĩ sợ lấy chồng, nhưng cũng rất sợ sự cô đơn. Cảm giác chưa lo nổi cho bản thân mình nhưng lại làm chỗ dựa cho người khác thực sự nghẹt thở.</p>\r\n\r\n<p>Ngược lại, bạn Nguyễn Thị Huyền Thanh bày tỏ việc con gái lấy chồng và chăm sóc gia đình rất thiêng liêng. Một người phụ nữ có thể kiếm được tiền, hoàn thành trách nhiệm làm vợ, làm dâu, làm mẹ là ý nghĩa nhất.\r\n\r\nBày tỏ quan điểm, bạn Trần Ngọc cho biết nếu không thích bạn có thể không lấy chồng. Nhưng đừng mang những ví dụ thiểu số ra để so sánh với nhiều cặp vợ chồng khác.\r\n\r\n“Hạnh phúc là do bản thân mình mà thôi. Đừng nghĩ đến những cặp vợ chồng ly dị, những tranh cãi mẹ chồng - nàng dâu để quy kết tương lai mình cũng như thế. Đó là suy nghĩ quá cực đoan”, Trần Ngọc nói.</p>', 'https://znews-photo-td.zadn.vn/w660/Uploaded/Ycgmvlbp/2018_05_19/docthan.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-01 10:15:48', '0000-00-00 00:00:00', 1, 2),
(5, NULL, 'New', 'New posts', 'Abc Abc Abc', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-06-01 10:08:00', '0000-00-00 00:00:00', 2, 2);

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
  `type_user` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `status` tinyint(4) NOT NULL COMMENT '0 - Pending; 1 - Active; 2 - Delete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `namecompany`, `representative`, `email`, `username`, `password`, `phone`, `address`, `type_user`, `created_at`, `updated_at`, `status`) VALUES
(1, NULL, 'Ngoc eat Shiit', NULL, 'admin', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, '2018-05-30 10:23:36', '0000-00-00 00:00:00', 1),
(2, NULL, 'Ngoc Tran', NULL, 'ngoctt', 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, '2018-05-30 10:23:44', '0000-00-00 00:00:00', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
