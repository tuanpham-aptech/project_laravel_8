<!-- sử dụng phương thức laravel cung cấp đối với nut tiến  -->
@if($data->hasPages())<!-- Phương thức hasPages() kiểm tra nếu số trang vượt quá trả tất cả -->
<a href="{{$data->previousPageUrl()}}">
<input type="button" value="<<Prev">
</a>
<a href="{{$data->nextPageUrl()}}">
<input type="button" value="Next>>">
</a>
@endif
