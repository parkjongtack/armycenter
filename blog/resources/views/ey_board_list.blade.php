@include('ey_header')
{{-- PC슬라이더 --}}
<div class="con_main">
    <form action="">
        <table>
            <colgroup>
				@if(request()->segment(2) != 'section' && request()->segment(2) != 'label' && request()->segment(2) != 'pouch' && request()->segment(2) != 'inquiry' && request()->segment(2) != 'notice' && request()->segment(2) != 'equipment' && request()->segment(2) != 'sale_label' && request()->segment(2) != 'sale_pouch')
                <col width="100">
                <col width="500">
				@else
                <col width="100">
                <col width="500">
				@endif
                <col width="250">
				@if(request()->segment(2) != 'section' && request()->segment(2) != 'label' && request()->segment(2) != 'pouch' && request()->segment(2) != 'inquiry' && request()->segment(2) != 'notice' && request()->segment(2) != 'equipment' && request()->segment(2) != 'sale_label' && request()->segment(2) != 'sale_pouch')
                <col width="100">
				@endif
                <col width="100">
                <col width="180">
            </colgroup>
            <thead>
                <tr>
                    <th>번호</th>
                    <th>제목</th>
                    <th>등록일</th>
					@if(request()->segment(2) != 'section' && request()->segment(2) != 'label' && request()->segment(2) != 'pouch' && request()->segment(2) != 'inquiry' && request()->segment(2) != 'notice' && request()->segment(2) != 'equipment' && request()->segment(2) != 'sale_label' && request()->segment(2) != 'sale_pouch')
					<th>우선순위</th>
					@endif
					<th>노출여부</th>
                    <th>기능</th>
                </tr>
            </thead>
            <tbody>
				@if($totalCount == '0')
					<tr>
						<td colspan="7">게시글이 없습니다.</td>
					</tr>
				@else
					@foreach($data as $data)
						<tr>
							<td>{{ $number-- }}</td>
							<td>@if(request()->segment(2) == 'media')<a href="{{ $data->link_value }}" target="_blank">{{ $data->link_value }}</a>
							@elseif(request()->segment(2) == 'notice' || request()->segment(2) == 'inquiry')
							{{ $data->category }}
							@else
							<a href="#none"><img src="/storage/app/images/{{ $data->attach_file }}" alt="" width="75px" height="75px"></a>
							@endif</td>
							<!-- <td>{{ $data->start_period }} ~ {{ $data->end_period }}</td> -->
							<td>{{ $data->subject }}</td>
							<td>{{ $data->reg_date }}</td>
							@if(request()->segment(2) != 'section' && request()->segment(2) != 'label' && request()->segment(2) != 'pouch' && request()->segment(2) != 'inquiry' && request()->segment(2) != 'notice' && request()->segment(2) != 'equipment' && request()->segment(2) != 'sale_label' && request()->segment(2) != 'sale_pouch')
							<td>
								<span class="list_arrow first" style="cursor: pointer;" onclick="javascript:location.href='/ey_admin/priority_change?status=2down&board_idx={{ $data->idx }}&board_type={{ request()->segment(2) }}';"><i style="color: #555" class="fas fa-arrow-up"></i></span>
								<span class="list_arrow second" style="cursor: pointer;" onclick="javascript:location.href='/ey_admin/priority_change?status=down&board_idx={{ $data->idx }}&board_type={{ request()->segment(2) }}';"><i style="color: #ddd" class="fas fa-arrow-up"></i></span>
								<span class="list_arrow third" style="cursor: pointer;" onclick="javascript:location.href='/ey_admin/priority_change?status=up&board_idx={{ $data->idx }}&board_type={{ request()->segment(2) }}';"><i style="color: #ddd" class="fas fa-arrow-down"></i></span>
								<span class="list_arrow four" style="cursor: pointer;" onclick="javascript:location.href='/ey_admin/priority_change?status=2up&board_idx={{ $data->idx }}&board_type={{ request()->segment(2) }}';"><i style="color: #555" class="fas fa-arrow-down"></i></span>
							</td>
							@endif
							<td>
								@if($data->use_status == 'Y')
									사용
								@else
									중지
								@endif
							</td>
							<td class="delete_box"><a href="javascript:control('{{ $data->idx }}');">삭제</a><a href="/ey_admin/{{ request()->segment(2) }}/write_board_form/modify?board_idx={{ $data->idx }}" style="background-color: #08AEEA; border:1px solid #0faeea; color: #fff;">수정</a></td>
						</tr>
					@endforeach
				@endif
            </tbody>
        </table>
        <div class="paging">
			{!! $paging_view !!}
		</div>
        {{-- <div class="create" style="padding-bottom:10px;">
			<a href="/ey_admin/{{ request()->segment(2) }}/write_board_form">등록</a>
            <!-- <a href="/ey_write_gallery">등록</a> -->
        </div> --}}
    </form>
	<form name="search_form" action="{{ $_SERVER['REQUEST_URI'] }}" class="board_search_con" onsubmit="return search();" style="display: none;">
		<input type="hidden" name="page" />
		<!-- <input type="text" name="key" placeholder="검색어를 입력하세요" value="{{ $key }}" required> -->
		<button></button>
	</form>
</div>
<script type="text/javascript">

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