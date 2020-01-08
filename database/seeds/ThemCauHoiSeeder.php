<?php

use Illuminate\Database\Seeder;

class ThemCauHoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cauhoi  = [];
        $cauhoi [] =  [
            'noi_dung'=>'Trong các con vật sau đây, con nào to nhất?', 
        'linh_vuc_id' =>'1',
        'phuong_an_a' =>'Hổ ',
        'phuong_an_b' =>'Voi ',
        'phuong_an_c' =>'Cá mập ',
        'phuong_an_d' =>'Cá voi xanh ',
        'dap_an' =>'Voi'];
        $cauhoi [] = ['noi_dung'=>'Trong các con vật sau đây, con nào có khả năng leo trèo?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Khỉ ','phuong_an_b' =>'Hổ ','phuong_an_c' =>'Nai ','phuong_an_d' =>'Chó sói','dap_an' =>'Khỉ'];
        $cauhoi [] = ['noi_dung'=>'Trong các con vật sau đây, con nào được xem là cậu ông trời?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Nhái ','phuong_an_b' =>'Ếch ','phuong_an_c' =>'Cóc ','phuong_an_d' =>'Ễnh ương ','dap_an' =>'Cóc'];
        $cauhoi [] = ['noi_dung'=>'Trong các con vật sau đây, con nào có sừng?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Chó sói ','phuong_an_b' =>'Gấu ','phuong_an_c' =>'Hươu ','phuong_an_d' =>'Ngựa vằn','dap_an' =>'Hươu'];
        $cauhoi [] = ['noi_dung'=>'Trong các loại quả sau đây, quả nào ngọt nhất?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Cà chua','phuong_an_b' =>'Bầu ','phuong_an_c' =>'Bưởi ','phuong_an_d' =>'Táo ','dap_an' =>'Táo'];
        $cauhoi [] = ['noi_dung'=>'Trong các con vật sau đây, con nào chạy nhanh nhất?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Rùa ','phuong_an_b' =>'Chó ','phuong_an_c' =>'Mèo','phuong_an_d' =>'Thỏ ','dap_an' =>'Chó'];
        $cauhoi [] = ['noi_dung'=>'Trong các con vật sau đây, con nào chạy chậm nhất?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Thỏ ','phuong_an_b' =>'Dê ','phuong_an_c' =>'Chó ','phuong_an_d' =>'Rùa ','dap_an' =>'Rùa'];
        $cauhoi [] = ['noi_dung'=>'Con gì sẽ hoá thành muỗi khi trưởng thành?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Nòng nọc ','phuong_an_b' =>'Lăng quăng ','phuong_an_c' =>'Giòi ','phuong_an_d' =>'Nhộng','dap_an' =>'Lăng quăng'];
        $cauhoi [] = ['noi_dung'=>'Trong các con vật sau đây, con nào di chuyển chậm nhất?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Rùa ','phuong_an_b' =>'Ốc','phuong_an_c' =>'Rắn ','phuong_an_d' =>'Ếch ','dap_an' =>'Rùa'];
        $cauhoi [] = ['noi_dung'=>'Trong các con vật sau đây, con nào di chuyển nhanh nhất?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Rắn ','phuong_an_b' =>'Thỏ ','phuong_an_c' =>'Dê ','phuong_an_d' =>'Cừu ','dap_an' =>'Thỏ'];
        $cauhoi [] = ['noi_dung'=>'Con gì có cánh, mà không biết bay, ngày xuống ao chơi, đêm về đẻ trứng?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Con gà ','phuong_an_b' =>'Con chim ','phuong_an_c' =>'Con vịt ','phuong_an_d' =>'Con bồ ','dap_an' =>'Con gà'];
        $cauhoi [] = ['noi_dung'=>'Con gì tám cẳng hai càng?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Con Cua','phuong_an_b' =>'Con Cá','phuong_an_c' =>'Con Tôm','phuong_an_d' =>'Con Mực','dap_an' =>'Con cua'];
        $cauhoi [] = ['noi_dung'=>'Kim loại dẫn điện tốt nhất?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Vàng ','phuong_an_b' =>'Bạc ','phuong_an_c' =>'Nhôm ','phuong_an_d' =>'Đồng','dap_an' =>'Vàng'];
        $cauhoi [] = ['noi_dung'=>'Khoáng chất nào cứng nhất trong các khoáng chất sau?', 'linh_vuc_id' =>'1','phuong_an_a' =>'Thạch Anh ','phuong_an_b' =>'Topa ','phuong_an_c' =>'Kim cương ','phuong_an_d' =>'Thạch cao ','dap_an' =>'Kim cương'];
        $cauhoi [] = ['noi_dung'=>'Trong các chi tiết máy, có tên của con vật nào?','linh_vuc_id' =>'1','phuong_an_a' =>'Ốc','phuong_an_b' =>'Hến ','phuong_an_c' =>'Tôm ','phuong_an_d' =>'Cua ','dap_an' =>'Ốc'];

        $cauhoi [] = ['noi_dung'=>'Ở Việt Nam, mùa nào nóng nhất trong năm?', 'linh_vuc_id' =>'2', 'phuong_an_a'=>'Xuân', 'phuong_an_b' =>'Hạ ', 'phuong_an_c' =>'Thu ', 'phuong_an_d' =>'Đông ', 'dap_an' =>'Hạ'];
        $cauhoi [] =  ['noi_dung'=>'Huyện Nam Đàn thuộc tỉnh nào của Việt Nam?', 'linh_vuc_id' =>'2','phuong_an_a'=>'Thanh Hoá','phuong_an_b' =>'Nghệ Tĩnh','phuong_an_c' =>'Hà Tĩnh','phuong_an_d' =>'Nghệ An','dap_an' =>'Nghệ An'];
        $cauhoi [] = ['noi_dung'=>'Quê hương của Bác Hồ?', 'linh_vuc_id' =>'2','phuong_an_a'=>'Nghệ An','phuong_an_b' =>'Nghệ Tĩnh','phuong_an_c' =>'Hà Tĩnh','phuong_an_d' =>'Hà Nội','dap_an' =>'Nghệ An'];
        $cauhoi [] = ['noi_dung'=>'Hồ Gươm ở đâu?', 'linh_vuc_id' =>'2', 'phuong_an_a'=>'Hà Tĩnh','phuong_an_b' =>'Hà Nam','phuong_an_c' =>'Hà Nội','phuong_an_d' =>'Tp. Hồ Chí Minh','dap_an' =>'Hà Nội'];
        $cauhoi [] = ['noi_dung'=>'Quần đảo Hoàng Sa và quần đảo Trường Sa thuộc chủ quyền của quốc gia nào?', 'linh_vuc_id' =>'2','phuong_an_a'=>'Việt Nam','phuong_an_b' =>'Campuchia','phuong_an_c' =>'Phillippines','phuong_an_d' =>'Indonesia','dap_an' =>'Việt Nam'];
        $cauhoi [] = ['noi_dung'=>'Thủ đô của nước Việt Nam tên là gì?', 'linh_vuc_id' =>'2', 'phuong_an_a'=>'Hà Tĩnh ','phuong_an_b' =>'Hà Nam ','phuong_an_c' =>'Hà Nội ','phuong_an_d' =>'Hà Đông ','dap_an' =>'Hà Nội'];
        $cauhoi [] = ['noi_dung'=>'Ở Việt Nam, dân tộc nào có số người đông nhất?', 'linh_vuc_id' =>'2', 'phuong_an_a'=>'Tày','phuong_an_b' =>'Nùng','phuong_an_c' =>'Khơme','phuong_an_d' =>'Kinh','dap_an' =>'Kinh'];
        $cauhoi [] = ['noi_dung'=>'Việt Nam giáp với Campuchia, Trung Quốc và quốc gia nào?', 'linh_vuc_id' =>'2','phuong_an_a'=>'Thái Lan ','phuong_an_b' =>'Malaysia ','phuong_an_c' =>'Lào ','phuong_an_d' =>'Philippines ','dap_an' =>'Lào'];
        $cauhoi [] = ['noi_dung'=>'Quốc kỳ có hình lá phong là quốc kỳ của quốc gia nào?', 'linh_vuc_id' =>'2','phuong_an_a'=>'Việt Nam','phuong_an_b' =>'Brazil','phuong_an_c' =>'Canada','phuong_an_d' =>'Hoa Kỳ ','dap_an' =>'Canada'];
        $cauhoi [] = ['noi_dung'=>'Đất nước nằm phía nam của Việt Nam là đất nước nào?', 'linh_vuc_id' =>'2','phuong_an_a'=> 'Malaysia ','phuong_an_b' =>'Thái Lan ','phuong_an_c' =>'Myanmar ','phuong_an_d' =>'Camphuchia ','dap_an' =>'Campuchia'];
        $cauhoi [] = ['noi_dung'=>'Quốc kỳ Việt nam có hình gì?', 'linh_vuc_id' =>'2', 'phuong_an_a'=>'Hoa sen','phuong_an_b' =>'Chiếc nón ','phuong_an_c' =>'Ngôi sao ','phuong_an_d' =>'Hoa mai ','dap_an' =>'Hoa Sen'];
        $cauhoi [] = ['noi_dung'=>'Miền Bắc Việt Nam có bao nhiêu mùa trong năm?', 'linh_vuc_id' =>'2','phuong_an_a'=>'3','phuong_an_b' =>'4','phuong_an_c' =>'5','phuong_an_d' =>'6','dap_an' =>'4'];
        $cauhoi [] = ['noi_dung'=>'Đất nước nằm phía Tây Nam nước ta là đất nước nào?', 'linh_vuc_id' =>'2', 'phuong_an_a'=>'Brunei ','phuong_an_b' =>'Trung Quốc ','phuong_an_c' =>'Lào ','phuong_an_d' =>'Thái Lan ','dap_an' =>'Lào'];
        $cauhoi [] = ['noi_dung'=>'Đảo Phú Quốc ở vịnh Thái Lan thuộc chủ quyền của quốc gia nào?', 'linh_vuc_id' =>'2', 'phuong_an_a'=>'Thái Lan ','phuong_an_b' =>'Campuchia ','phuong_an_c' =>'Việt Nam ','phuong_an_d' =>'Malaysia ','dap_an' =>'Việt Nam'];
        $cauhoi [] = ['noi_dung'=>'Vịnh Hạ Long trước thuộc tỉnh nào của Việt Nam?', 'linh_vuc_id' =>'2','phuong_an_a'=>'Quảng Bình','phuong_an_b' =>'Hải Phòng','phuong_an_c' =>'Quảng Trị','phuong_an_d' =>'Quảng Ninh','dap_an' =>'Quang Ninh'];

        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu tục ngữ sau: Chớp đông nhay nháy, gà gáy thì ....?','linh_vuc_id' =>'3','phuong_an_a' =>'Toi','phuong_an_b' =>'Mưa','phuong_an_c' =>'Nắng','phuong_an_d' =>'Râm','dap_an' =>'Mưa'];
        $cauhoi [] = ['noi_dung'=>'Danh từ nào sau đây là tên một loài chim?','linh_vuc_id' =>'3','phuong_an_a' =>'Họa sĩ','phuong_an_b' =>'Họa tiết','phuong_an_c' =>'Họa mi','phuong_an_d' =>'Họa bì','dap_an' =>'Họa mi'];
        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu thành ngữ để chỉ vẻ đẹp: Chim sa cá ....?','linh_vuc_id' =>'3','phuong_an_a' =>'Nổi','phuong_an_b' =>'Nhảy','phuong_an_c' =>'Lặn','phuong_an_d' =>'Bơi','dap_an' =>'Lặn'];
        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu thành ngữ: Cơn đằng đông vừa trông vừa ...?','linh_vuc_id' =>'3','phuong_an_a' =>'Sợ','phuong_an_b' =>'Chạy','phuong_an_c' =>'Trốn','phuong_an_d' =>'Tắm','dap_an' =>'Chạy'];
        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu thành ngữ: Con kiến mà kiện ...?','linh_vuc_id' =>'3','phuong_an_a' =>'Con voi','phuong_an_b' =>'Củ khoai','phuong_an_c' =>'Đầu gối','phuong_an_d' =>'Hộp đường','dap_an' =>'Con voi'];
        $cauhoi [] = ['noi_dung'=>'Điền vào chỗ trống: Đi với bụt mặc áo cà sa, đi với ma mặc áo ...?','linh_vuc_id' =>'3','phuong_an_a' =>'Áo dài','phuong_an_b' =>'Áo giấy','phuong_an_c' =>'Áo lụa','phuong_an_d' =>'Áo gió','dap_an' =>'Áo giấy'];
        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu tục ngữ: Đi một ngày đàng, ...?','linh_vuc_id' =>'3','phuong_an_a' =>'Gặp toàn hàng ngon','phuong_an_b' =>'Mệt rũ chân tay','phuong_an_c' =>'Học một sàng khôn','phuong_an_d' =>'Vớ toàn điều xui','dap_an' =>'Học một sàng khôn'];
        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu tục ngữ: Đói cho sạch, rách cho ...?','linh_vuc_id' =>'3','phuong_an_a' =>'Thơm','phuong_an_b' =>'Lành','phuong_an_c' =>'Vuông','phuong_an_d' =>'No','dap_an' =>'Thơm'];
        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu tục ngữ: Đời cha ăn mặn, đời con ...?','linh_vuc_id' =>'3','phuong_an_a' =>'Ăn nhạt','phuong_an_b' =>'Khát nước','phuong_an_c' =>'Ăn cay','phuong_an_d' =>'Chết đói','dap_an' =>'Khát nước'];
        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu tục ngữ: Chết ... còn hơn sống nhục?','linh_vuc_id' =>'3','phuong_an_a' =>'Trong','phuong_an_b' =>'Xanh','phuong_an_c' =>'Vinh','phuong_an_d' =>'Sướng','dap_an' =>'Vinh'];
        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu thành ngữ: Kẻ cắp gặp ...?','linh_vuc_id' =>'3','phuong_an_a' =>'Bà già','phuong_an_b' =>'Công an','phuong_an_c' =>'Thương binh','phuong_an_d' =>'Nông dân','dap_an' =>'Bà già'];
        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu tục ngữ: Lo bò ... răng?','linh_vuc_id' =>'3','phuong_an_a' =>'Đen','phuong_an_b' =>'Trắng','phuong_an_c' =>'Sáng','phuong_an_d' =>'Sứt','dap_an' =>'Trắng'];
        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu tục ngữ: Không thầy đố mày ...?','linh_vuc_id' =>'3','phuong_an_a' =>'Học ngu','phuong_an_b' =>'Dạy ai','phuong_an_c' =>'Làm nên','phuong_an_d' =>'Đi chơi','dap_an' =>'Làm nên'];
        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu tục ngữ: Khôn nhà, dại ...?','linh_vuc_id' =>'3','phuong_an_a' =>'Vườn','phuong_an_b' =>'Trường','phuong_an_c' =>'Cửa','phuong_an_d' =>'Chợ','dap_an' =>'Chợ'];
        $cauhoi [] = ['noi_dung'=>'Điền tiếp vào câu tục ngữ: Một giọt ... hơn ao nước lã?','linh_vuc_id' =>'3','phuong_an_a' =>'Axit','phuong_an_b' =>'Bazo','phuong_an_c' =>'Máu đào','phuong_an_d' =>'Nước thánh','dap_an' =>'Máu đào'];

        $cauhoi [] =['noi_dung'=>'Bài hát Da nâu do ca sĩ nào thể hiện?','linh_vuc_id' =>'4', 'phuong_an_a' =>'Ngô Thanh Vân','phuong_an_b' =>'Phi Thanh Vân','phuong_an_c' =>'Nguyễn Thanh Vân','phuong_an_d' =>'Đặng Thanh Vân','dap_an' =>'Phi Thanh Vân'];
        $cauhoi [] =['noi_dung'=>'Đoàn quân Việt Nam đi trong lòng cứu quốc là câu hát trong bài hát nào?','linh_vuc_id' =>'4', 'phuong_an_a' =>'Quốc tế ca','phuong_an_b' =>'Quốc ca','phuong_an_c' =>'Lá xanh ','phuong_an_d' =>'Đồng chí ','dap_an' =>'Quốc ca'];
        $cauhoi [] =['noi_dung'=>'Quốc ca của Việt Nam là bài hát nào?','linh_vuc_id' =>'4', 'phuong_an_a' =>'Hành quân xa','phuong_an_b' =>'Tiến Quân ca','phuong_an_c' =>'Khúc hát hành quân','phuong_an_d' =>'Khúc hát thanh niên','dap_an' =>'Tiến Quân ca'];
        $cauhoi [] =['noi_dung'=>'Hẹn gặp nhé giữa Sài Gòn là câu hát cuối trong bài hát nào?','linh_vuc_id' =>'4', 'phuong_an_a' =>'Lá xanh ','phuong_an_b' =>'Lá đỏ ','phuong_an_c' =>'Tình ca ','phuong_an_d' =>'Người Hà Nội ','dap_an' =>'Lá đỏ'];
        $cauhoi [] =['noi_dung'=>'Bài hát Tình ca của Hoàng Việt nhắc đến mùa nào trong năm?','linh_vuc_id' =>'4', 'phuong_an_a' =>'Xuân ','phuong_an_b' =>'Hạ ','phuong_an_c' =>'Thu ','phuong_an_d' =>'Đông ','dap_an' =>'Đông'];
        $cauhoi [] =['noi_dung'=>'Ca sĩ / nhóm nhạc nào thể hiện ca khúc One Love?','linh_vuc_id' =>'4', 'phuong_an_a' =>'Westlife','phuong_an_b' =>'Backstreet Boys','phuong_an_c' =>'Blue','phuong_an_d' =>'Elton John','dap_an' =>'Blue'];
        $cauhoi [] =['noi_dung'=>'Ca sĩ nào thể hiện thành công bài hát Everytime? ','linh_vuc_id' =>'4', 'phuong_an_a' =>'Pink','phuong_an_b' =>'Katy Perry','phuong_an_c' =>'Britney Spears ','phuong_an_d' =>'Mariah Carey','dap_an' =>'Mariah Carey'];
        $cauhoi [] =['noi_dung'=>'Ca sĩ Mariah Carey thể hiện thành công ca khúc When you believe với ca sĩ nào?','linh_vuc_id' =>'4', 'phuong_an_a' =>'Whitney Houston','phuong_an_b' =>'Sharah Corner ','phuong_an_c' =>'Diana Rose','phuong_an_d' =>'Britney Spears','dap_an' =>'Whitney Houston'];
        $cauhoi [] =['noi_dung'=>'Bài hát Dancing Queen nổi tiếng của nhóm nhạc nào thể hiện?','linh_vuc_id' =>'4', 'phuong_an_a' =>'The Beatles ','phuong_an_b' =>'Carpenters ','phuong_an_c' =>'ABBA','phuong_an_d' =>'Dream Girls ','dap_an' =>'ABBA'];
        $cauhoi [] =['noi_dung'=>'Bài hát My love do ca sĩ/nhóm nhạc nào thể hiện? ','linh_vuc_id' =>'4', 'phuong_an_a' =>'Blue ','phuong_an_b' =>'Lee Ryan ','phuong_an_c' =>'Westlife','phuong_an_d' =>'N Sync ','dap_an' =>'Westlife'];
        $cauhoi [] =['noi_dung'=>'Sau Extremely, nhóm nhạc nhóm nhạc nào cover thành công bài hát More Than Words? ','linh_vuc_id' =>'4', 'phuong_an_a' =>'The Click5 ','phuong_an_b' =>'Westlife ','phuong_an_c' =>'Simple Plan ','phuong_an_d' =>'Linkin Park ','dap_an' =>'Westlife '];
        $cauhoi [] =['noi_dung'=>'Bài hát Baby One More Time do ca sĩ nào thể hiện? ','linh_vuc_id' =>'4', 'phuong_an_a' =>'Christina Aguilera ','phuong_an_b' =>'Beyoncé ','phuong_an_c' =>'Lady Gaga','phuong_an_d' =>'Britney Spears ','dap_an' =>'Britney Spears '];
        $cauhoi [] =['noi_dung'=>'Bài hát một đời người, một rừng cây là nhạc sỹ nào?','linh_vuc_id' =>'4', 'phuong_an_a' =>'Trần Long Ẩn','phuong_an_b' =>'Trần Hoàn ','phuong_an_c' =>'Hoàng Việt ','phuong_an_d' =>'Phạm Minh Tuấn ','dap_an' =>'Trần Long Ẩn'];
        $cauhoi [] =['noi_dung'=>'Bài hát Một trái tim, một tấm lòng do nhạc sĩ nào sáng tác?','linh_vuc_id' =>'4', 'phuong_an_a' =>'Trần Tiến ','phuong_an_b' =>'Trần Hiếu ','phuong_an_c' =>'Thế Hiển ','phuong_an_d' =>'Hoàng Lân ','dap_an' =>'Thế Hiển '];
        $cauhoi [] =['noi_dung'=>'Bài hát Tiến quốc ca trở thành quốc ca của nước ta vào năm bao nhiêu?','linh_vuc_id' =>'4', 'phuong_an_a' =>'1944','phuong_an_b' =>'1945','phuong_an_c' =>'1946','phuong_an_d' =>'1954','dap_an' =>'1945'];

        $cauhoi [] =['noi_dung'=>'Tác phẩm nào sau đây là của nhà văn nổi tiếng Ngô Thừa Ân?','linh_vuc_id' =>'5','phuong_an_a' =>'Thuỷ Hử ','phuong_an_b' =>'Tam Quốc Diễn Nghĩa ','phuong_an_c' =>'Tây Du Ký ','phuong_an_d' =>'Hồng Lâu Mộng ','dap_an' =>'Tây Du Ký'];
        $cauhoi [] =['noi_dung'=>'Tết gì trẻ em đốt đèn đi chơi khắp phố phường, xóm làng?','linh_vuc_id' =>'5','phuong_an_a' =>'Tết Nguyên Đán ','phuong_an_b' =>'Tết Nguyên Tiêu ','phuong_an_c' =>'Tết Trung Thu ','phuong_an_d' =>'Tết Hàn thực','dap_an' =>'Tết Trung Thu '];
        $cauhoi [] =['noi_dung'=>'Tết cổ truyền cùa người Việt Nam diễn ra vào mùa nào trong năm?','linh_vuc_id' =>'5','phuong_an_a' =>'Xuân ','phuong_an_b' =>'Hạ ','phuong_an_c' =>'Thu ','phuong_an_d' =>'Đông','dap_an' =>'Xuân '];
        $cauhoi [] =['noi_dung'=>'Đơn vị tiền tệ của người Việt Nam hiện đang sử dụng là gì?','linh_vuc_id' =>'5','phuong_an_a' =>'Xu','phuong_an_b' =>'Hào','phuong_an_c' =>'Cắc','phuong_an_d' =>'Đồng','dap_an' =>'Đồng '];
        $cauhoi [] =['noi_dung'=>'Hồ Chí Minh từng là gì đối với đất nước Việt Nam?','linh_vuc_id' =>'5','phuong_an_a' =>'Tổng bí thư','phuong_an_b' =>'Chủ tịch nước','phuong_an_c' =>'Thủ tướng','phuong_an_d' =>'Nhà ngoại gia','dap_an' =>'Chủ tịch nước '];
        $cauhoi [] =['noi_dung'=>'Trong các ngày dưới đấy, ngày nào là ngày quốc tế phụ nữ?','linh_vuc_id' =>'5','phuong_an_a' =>'09.09','phuong_an_b' =>'03.08','phuong_an_c' =>'08.03','phuong_an_d' =>'20.10','dap_an' =>'20.10 '];
        $cauhoi [] =['noi_dung'=>'Ngày 0101 âm lịch là ngày gì của người Việt Nam?','linh_vuc_id' =>'5','phuong_an_a' =>'Tết Nguyên Tiêu','phuong_an_b' =>'Tết Trung Thu ','phuong_an_c' =>'Tết Hàn Thực ','phuong_an_d' =>'Tết Nguyên Đán ','dap_an' =>'Tết Nguyên Đán '];
        $cauhoi [] =['noi_dung'=>'Ngày 1-5 là ngày kỉ niệm gì?','linh_vuc_id' =>'5','phuong_an_a' =>'Quốc tế lao động','phuong_an_b' =>'Quốc tế phụ nữ','phuong_an_c' =>'Giải phóng miền Nam ','phuong_an_d' =>'Chiến thắng Điện Biên Phủ ','dap_an' =>'Quốc tế lao động'];
        $cauhoi [] =['noi_dung'=>'Ở nước ta, tình trạng thiếu việc làm là nét đặc trưng của khu vực?','linh_vuc_id' =>'5','phuong_an_a' =>'Đồng bằng ','phuong_an_b' =>'Miền núi ','phuong_an_c' =>'Thành thị ','phuong_an_d' =>'Nông thôn ','dap_an' =>'Miền núi '];
        $cauhoi [] =['noi_dung'=>'Thế vận hội mùa đông năm 1992 được tổ chức ở quốc gia nào?','linh_vuc_id' =>'5','phuong_an_a' =>'Thụy Điển','phuong_an_b' =>'Pháp ','phuong_an_c' =>'Na Uy ','phuong_an_d' =>'Nhật Bản ','dap_an' =>'Nhật Bản '];
        $cauhoi [] =['noi_dung'=>'Thế vận hội mùa đông năm 1992 được tổ chức ở quốc gia nào?','linh_vuc_id' =>'5','phuong_an_a' =>'Thụy Điển','phuong_an_b' =>'Pháp ','phuong_an_c' =>'Na Uy ','phuong_an_d' =>'Nhật Bản ','dap_an' =>'Nhật Bản '];
        $cauhoi [] =['noi_dung'=>'Thế vận hội mùa đông năm 1992 được tổ chức ở quốc gia nào?','linh_vuc_id' =>'5','phuong_an_a' =>'Thụy Điển','phuong_an_b' =>'Pháp ','phuong_an_c' =>'Na Uy ','phuong_an_d' =>'Nhật Bản ','dap_an' =>'Nhật Bản '];
        $cauhoi [] =['noi_dung'=>'Tác giả của tiểu thuyết Tru Tiên?','linh_vuc_id' =>'5','phuong_an_a' =>'Kim Dung ','phuong_an_b' =>'Tiêu Đỉnh ','phuong_an_c' =>'Cổ Long ','phuong_an_d' =>'Ngoạ Long Sinh ','dap_an' =>'Kim Dung '];
        $cauhoi [] =['noi_dung'=>'Tom và Jerrry, bộ phim hoạt hình quen thuộc với bao thế hệ người xem đã được bắt đầu sản xuất từ năm?','linh_vuc_id' =>'5','phuong_an_a' =>'1950 ','phuong_an_b' =>'1970 ','phuong_an_c' =>'1940 ','phuong_an_d' =>'1930 ','dap_an' =>'1940'];
        $cauhoi [] =['noi_dung'=>'Di Hoà Viên  nơi đây nổi tiếng về nghệ thuật hoa viên truyền thống của Trung Quốc. Nó đã tồn tại bao nhiêu năm?','linh_vuc_id' =>'5','phuong_an_a' =>'700 năm ','phuong_an_b' =>'800 năm ','phuong_an_c' =>'900 năm ','phuong_an_d' =>'1000 năm ','dap_an' =>'800 năm'];
        $cauhoi [] =['noi_dung'=>'Nhạc Jazz bắt nguồn từ nước nào?','linh_vuc_id' =>'5','phuong_an_a' =>'Áo ','phuong_an_b' =>'Đức ','phuong_an_c' =>'Thuỵ Sĩ','phuong_an_d' =>'Thổ Nhĩ Kỳ ','dap_an' =>'Áo '];
        $cauhoi [] =['noi_dung'=>'Tỉ lệ người trưởng thành ở quốc gia nào biết chữ thấp nhất thế giới?','linh_vuc_id' =>'5','phuong_an_a' =>'Cuba ','phuong_an_b' =>'Guinea Xích Đạo ','phuong_an_c' =>'Mali ','phuong_an_d' =>'Senegal ','dap_an' =>'Senegal'];

        $cauhoi [] =['noi_dung'=>'Ngày 26/12/2004, một trận động đất mạnh 9.0 độ richter xảy ra tại nơi nào?','linh_vuc_id' =>'6','phuong_an_a' =>'Kamchatka Nga','phuong_an_b' =>'QĐ Andreanof Hoa Kỳ','phuong_an_c' =>'Sumatra Indonesia','phuong_an_d' =>'Assam Tây Tạng','dap_an' =>'Sumatra Indonesia'];
        $cauhoi [] =['noi_dung'=>'Hoá tệ kim loại xuất hiện từ khi nào?','linh_vuc_id' =>'6','phuong_an_a' =>'Từ cuối thế kỷ 19 ','phuong_an_b' =>'Từ cuối thế kỷ 18 ','phuong_an_c' =>'Đầu thế kỷ 17 ','phuong_an_d' =>'Thế kỷ 16 ','dap_an'=>'Đầu thế kỷ 17 '];
        $cauhoi [] =['noi_dung'=>'Trương Vĩnh Ký được ghi trong Bách khoa Tự điển Larousse và là một trong 18 văn hào thế giới thế kỷ 19. Ông thông thạo bao nhiêu thứ tiếng?','linh_vuc_id' =>'6','phuong_an_a' =>'12','phuong_an_b' =>'18','phuong_an_c' =>'26','phuong_an_d' =>'33','dap_an' =>'18'];
        $cauhoi [] =['noi_dung'=>'Ngày 27/03/1964, một trận động đất mạnh 9.2 độ richter xảy ra tại nơi nào?','linh_vuc_id' =>'6','phuong_an_a' =>'Alaska Hoa Kỳ','phuong_an_b' =>'Sumatra Indonesia','phuong_an_c' =>'Colombia  Ecuador','phuong_an_d' =>'Lisboa Bồ Đào Nha','dap_an' =>'Alaska Hoa Kỳ'];
        $cauhoi [] =['noi_dung'=>'Đại Hí Viện Colosseum trưng bày 5000 thú dữ ngày khánh thành, xây dựng năm 80 trước công nguyên ở quốc gia nào?','linh_vuc_id' =>'6','phuong_an_a' =>'Ai Cập ','phuong_an_b' =>'Hy Lạp ','phuong_an_c' =>'Ấn Độ ','phuong_an_d' =>'Italia','dap_an' =>'Italia'];
        $cauhoi [] =['noi_dung'=>'Khu di tích lịch sử Đền Hùng bao gồm bao nhiêu đền chính?','linh_vuc_id' =>'6','phuong_an_a' =>'2','phuong_an_b' =>'3','phuong_an_c' =>'5','phuong_an_d' =>'7','dap_an' =>'5'];
        $cauhoi [] =['noi_dung'=>'Ngày 16/10/1737, một trận động đất mạnh 9.3 độ richter xảy ra tại nơi nào?','linh_vuc_id' =>'6','phuong_an_a' =>'Chile','phuong_an_b' =>'Indonesia','phuong_an_c' =>'Nga ','phuong_an_d' =>'Trung Quốc','dap_an' =>'Nga '];
        $cauhoi [] =['noi_dung'=>'Tường biên giới Hadrian, một bình phong khổng lồ kéo dài trên đỉnh núi, xây dựng thê kỷ 2 công nguyên ở quốc gia nào?','linh_vuc_id' =>'6','phuong_an_a' =>'Pháp ','phuong_an_b' =>'Anh ','phuong_an_c' =>'Ai Cập ','phuong_an_d' =>'Hy Lạp ','dap_an' =>'Anh '];
        $cauhoi [] =['noi_dung'=>'Ai tự xưng mình là Hậu Lý Nam Đế?','linh_vuc_id' =>'6','phuong_an_a' =>'Lý Phật Tử ','phuong_an_b' =>'Lý Bí ','phuong_an_c' =>'Lý Công Uẩn ','phuong_an_d' =>'Lý Chiêu Hoàng ','dap_an' =>'Lý Phật Tử '];
        $cauhoi [] =['noi_dung'=>'Vua Quang Trung đã đánh tan 29 vạn quân Thanh vào năm nào?','linh_vuc_id' =>'6','phuong_an_a' =>'1600 ','phuong_an_b' =>'1789 ','phuong_an_c' =>'1801','phuong_an_d' =>'1812','dap_an' =>'1789 '];
        $cauhoi [] =['noi_dung'=>'Karaoke do ông Inoue Daisuke người Nhật phát minh vào năm 1971, khi đó ông bao nhiêu tuổi?','linh_vuc_id' =>'6','phuong_an_a' =>'31','phuong_an_b' =>'32','phuong_an_c' =>'33','phuong_an_d' =>'34','dap_an' =>'31'];
        $cauhoi [] =['noi_dung'=>'Liên minh Việt  Miên  Lào được thành lập vào ngày tháng năm nào?','linh_vuc_id' =>'6','phuong_an_a' =>'11/3/1951','phuong_an_b' =>'3/3/1951','phuong_an_c' =>'13/3/1951','phuong_an_d' =>'21/3/1951','dap_an' =>'3/3/1951'];
        $cauhoi [] =['noi_dung'=>'SEA  Games lần thứ 5 năm 1967, quốc gia nào đăng cai?','linh_vuc_id' =>'6','phuong_an_a' =>'Malaysia ','phuong_an_b' =>'Thái Lan ','phuong_an_c' =>'Indonesia ','phuong_an_d' =>'Myanmar ','dap_an' =>'Myanmar '];
        $cauhoi [] =['noi_dung'=>'SEA  Games lần thứ 25 năm 2009, quốc gia nào đăng cai?','linh_vuc_id' =>'6','phuong_an_a' =>'Thái Lan ','phuong_an_b' =>'Lào ','phuong_an_c' =>'Việt Nam ','phuong_an_d' =>'Philippines ','dap_an' =>'Lào '];

    //     $cauhoi [][] = [
    //         'noi_dung' =>' Có một tàu điện đi về hướng nam. Gió hướng tây bắc. Vậy khói từ con tàu sẽ theo hướng nào?',
    //         'linh_vuc_id' =>'1',
    //         'phuong_an_a' =>'Đông',
    //         'phuong_an_b' =>'Tây',
    //         'phuong_an_c' =>'Bắc',
    //         'phuong_an_d' =>'Không hướng nào',
    //         'dap_an' =>'Không hướng nào',
    //     ];
    //      $cauhoi [] []= ['noi_dung' =>' Làm thế nào để không đụng phải ngón tay khi bạn đập búa vào một cái móng tay?','linh_vuc_id' =>'2','phuong_an_a' =>'Cầm búa bằng cả 2 tay ','phuong_an_b' =>'Cầm búa bằng tay trái ','phuong_an_c' =>'Cầm búa bằng tay phải','phuong_an_d' =>'Cầm búa bằng chân ','dap_an' =>'Cầm búa bằng cả 2 tay'];
    //      $cauhoi [] []= ['noi_dung' =>' Nếu bạn nhìn thấy con chim đang đậu trên nhánh cây, làm sao để lấy nhánh cây mà không làm động con chim?','linh_vuc_id' =>'3','phuong_an_a' =>'Bắt chim bỏ ra ngoài ','phuong_an_b' =>'Đợi chim bay đi. ','phuong_an_c' =>'Ru chim ngủ rồi lấy ','phuong_an_d' =>'Cứ đến mà lấy','dap_an' =>'Đợi chim bay đi. '];
    //      $cauhoi [] []= ['noi_dung' =>' Từ gì mà 100% người Việt Nam đều phát âm sai?','linh_vuc_id' =>'4','phuong_an_a' =>'Đúng','phuong_an_b' =>'Sai','phuong_an_c' =>'Đúng','phuong_an_d' =>'Đúng','dap_an' =>'Sai'];
    //      $cauhoi [] []= ['noi_dung' =>' Làm thế nào để không đụng phải ngón tay khi bạn đập búa vào một cái móng tay?','linh_vuc_id' =>'2','phuong_an_a' =>'Cầm búa bằng cả 2 tay ','phuong_an_b' =>'Cầm búa bằng tay trái ','phuong_an_c' =>'Cầm búa bằng tay phải','phuong_an_d' =>'Cầm búa bằng chân ','dap_an' =>'Cầm búa bằng cả 2 tay'];
    //      $cauhoi [] []= ['noi_dung' =>' Nếu bạn nhìn thấy con chim đang đậu trên nhánh cây, làm sao để lấy nhánh cây mà không làm động con chim?','linh_vuc_id' =>'3','phuong_an_a' =>'Bắt chim bỏ ra ngoài ','phuong_an_b' =>'Đợi chim bay đi. ','phuong_an_c' =>'Ru chim ngủ rồi lấy ','phuong_an_d' =>'Cứ đến mà lấy','dap_an' =>'Đợi chim bay đi. '];
    //      $cauhoi [] []= ['noi_dung' =>' Từ gì mà 100% người Việt Nam đều phát âm sai?','linh_vuc_id' =>'4','phuong_an_a' =>'Đúng','phuong_an_b' =>'Sai','phuong_an_c' =>'Đúng','phuong_an_d' =>'Đúng','dap_an' =>'Sai'];
    //       $cauhoi [] []= ['noi_dung' =>' Chồng người da đen, vợ người da trắng vừa sinh một đứa bé, răng của nó màu gì?','linh_vuc_id' =>'4','phuong_an_a' =>'Trắng','phuong_an_b' =>'Đen','phuong_an_c' =>'Vàng','phuong_an_d' =>'Đỏ','dap_an' =>'Trắng'];
    //    $cauhoi [] []= ['noi_dung' =>' Bố mẹ có 6 người con trai, mỗi người con trai có một đứa em gái. Vậy gia đình đó có mấy người?','linh_vuc_id' =>'4','phuong_an_a' =>'8','phuong_an_b' =>'9','phuong_an_c' =>'10','phuong_an_d' =>'11','dap_an' =>'9'];
    //    $cauhoi [] []= ['noi_dung' =>' Cái gì mà đi thì nằm, đứng cũng nằm, nhưng nằm lại đứng?','linh_vuc_id' =>'4','phuong_an_a' =>'Cái bàn','phuong_an_b' =>'Cái ghế','phuong_an_c' =>'Bàn chân','phuong_an_d' =>'Bàn tay','dap_an' =>'Bàn chân'];
    //    $cauhoi [] []= ['noi_dung' =>' Có 1 đàn chuột điếc đi ngang qua hố cống, hỏi có mấy con?','linh_vuc_id' =>'4','phuong_an_a' =>'12','phuong_an_b' =>'18','phuong_an_c' =>'24','phuong_an_d' =>'30','dap_an' =>'24'];
    //    $cauhoi [] []= ['noi_dung' =>' Có 2 người cha và 2 người con cùng chia đều số tiền là 27 nghìn. Hỏi mỗi người được bao nhiều','linh_vuc_id' =>'4','phuong_an_a' =>'6.75','phuong_an_b' =>'7','phuong_an_c' =>'7.5','phuong_an_d' =>'9','dap_an' =>'9'];
    //    $cauhoi [] []= ['noi_dung' =>' Một anh thanh niên đánh 1 bà già hỏi anh ấy mất gì?','linh_vuc_id' =>'4','phuong_an_a' =>'Mất tiền','phuong_an_b' =>'Mất dạy','phuong_an_c' =>'Mất sức','phuong_an_d' =>'Mất trí','dap_an' =>'Mất dạy'];
    //    $cauhoi [] []= ['noi_dung' =>' Tìm điểm sai trong câu: "Dưới ánh nắng sương long lanh triệu cành hồng khoe sắc thắm".','linh_vuc_id' =>'4','phuong_an_a' =>'Ánh nắng sương ','phuong_an_b' =>'Triệu cành hồng ','phuong_an_c' =>'Khoe sắc thắm','phuong_an_d' =>'Sương long lanh ','dap_an' =>'Khoe sắc thắm'];
    //    $cauhoi [] []= ['noi_dung' =>' Cái gì luôn đi đến mà không bao giờ đến nơi?','linh_vuc_id' =>'4','phuong_an_a' =>'Cơn gió','phuong_an_b' =>'Tình yêu','phuong_an_c' =>'Ngày mai','phuong_an_d' =>'Không biết','dap_an' =>'Ngày mai'];
    //    $cauhoi [] []= ['noi_dung' =>' Vào lúc nửa đêm đồng hồ bất chợt gõ 13 tiếng, chuyện gì xảy ra?','linh_vuc_id' =>'4','phuong_an_a' =>'Có ma','phuong_an_b' =>'Chuyện xấu','phuong_an_c' =>'Tận thế','phuong_an_d' =>'Đồng hồ hỏng','dap_an' =>'Đồng hồ hỏng'];
    //    $cauhoi [] []= ['noi_dung' =>' Cái gì bạn không mượn mà trả?','linh_vuc_id' =>'4','phuong_an_a' =>'Tiền','phuong_an_b' =>'Lời cảm ơn','phuong_an_c' =>'Tình cảm','phuong_an_d' =>'Không thứ gì','dap_an' =>'Lời cảm ơn'];
    //    $cauhoi [] []= ['noi_dung' =>' Loại nước giải khát nào chứa Canxi và Sắt?','linh_vuc_id' =>'4','phuong_an_a' =>'CoCa','phuong_an_b' =>'Pepsi','phuong_an_c' =>'Café','phuong_an_d' =>'Sinh tố','dap_an' =>'Café'];
    //    $cauhoi [] []= ['noi_dung' =>' Có bao nhiêu chữ C trong câu sau: "Cơm, canh, cá, tất cả em đều thích"?','linh_vuc_id' =>'4','phuong_an_a' =>'1','phuong_an_b' =>'2','phuong_an_c' =>'4','phuong_an_d' =>'5','dap_an' =>'1'];
    //    $cauhoi [] []= ['noi_dung' =>' Miệng rộng lớn nhưng không nói một từ, là con gì?','linh_vuc_id' =>'4','phuong_an_a' =>'Con chim','phuong_an_b' =>'Con sông','phuong_an_c' =>'Con voi','phuong_an_d' =>'Con khỉ','dap_an' =>'Con sông'];
    //    $cauhoi [] []= ['noi_dung' =>' SEA  Games lần thứ 25 năm 2009, quốc gia nào đăng cai?','linh_vuc_id' =>'6','phuong_an_a' =>'Thái Lan','phuong_an_b' =>'Lào','phuong_an_c' =>'Việt Nam','phuong_an_d' =>'Philippines','dap_an' =>'Lào'];

       $i = 1;
   // Them vao bang goi_credit
   foreach ($cauhoi  as $ch) {
       echo "Them cau hoi thu " . $i . "\n";
       App\CauHoi::create($ch);
       $i++;
   }
   echo "Done...";
    }
    
}
