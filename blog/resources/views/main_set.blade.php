@include('ey_header')
{{-- PC슬라이더 --}}
<div class="con_main">
    <form name="main_text_form" method="post" action="/ey_admin/change_main_set" enctype="multipart/form-data">
		{{ csrf_field() }}
        <table>
			<tr>
				<td style="padding-left:20px; width:1200px;" align="left">
					인원수 설정 : <input type="text" id="people_cnt" name="people_cnt" value="{{ $data->people_cnt }}" style="width:300px;" />
				</td>
			</tr>
			<tr>
				<td style="padding-left:20px; width:1200px;" align="left">
					D-day 설정 : <input type="text" id="d_day" name="d_day" value="{{ $data->d_day }}" style="width:300px;" />
				</td>
			</tr>
			<tr>
				<td style="padding-left:20px; width:1200px;" align="left">
					KM 설정 : <input type="text" id="km_set" name="km_set" value="{{ $data->km_set }}" style="width:300px;" />
				</td>
            </tr>
        </table>
        <div class="create" style="padding-bottom:10px;">
			<a href="javascript:text_change_func();">등록</a>
            <!-- <a href="/ey_write_gallery">등록</a> -->
        </div>
    </form>
	<form name="search_form" action="{{ $_SERVER['REQUEST_URI'] }}" class="board_search_con" onsubmit="return search();" style="display: none;">
		<input type="hidden" name="page" />
		<button></button>
	</form>
</div>
<script type="text/javascript">

	function text_change_func() {
		var form = document.main_text_form;
		// if(form.main_text_pc.value == "") {
		// 	alert("변경할 텍스트가 없습니다.");
		// 	return;
		// }

		// if(form.main_text_mobile.value == "") {
		// 	alert("변경할 텍스트가 없습니다.");
		// 	return;
		// }

		form.submit();
	}

	function control(idx) {

		if(confirm("삭제하시겠습니까?")) {
			var formData = new FormData();
			formData.append("idx", idx);
			formData.append('_token', '{{ csrf_token() }}');

			$.ajax({
				type: 'post',
				url: '/ey_admin/{{ request()->segment(2) }}/control',
				processData: false,
				contentType: false,
				data: formData,
				success: function(result) {
					alert("삭제되었습니다.");
					location.reload();
				},
				error: function(xhr, status, error) {
					//$("#loading").hide();
					return false;
				}
			});
		}
	}

</script>
@include('ey_footer')