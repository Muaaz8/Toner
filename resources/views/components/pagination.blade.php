@if ($user->lastPage() != 1)
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-end">
            <li class="page-item first">
                <a class="page-link" href="{{ $user->path() . '?page=1' }}"><i class="tf-icon bx bx-chevrons-left"></i></a>
            </li>
            <li class="page-item prev">
                @if ($user->currentPage() - 1 == 0)
                    <a class="page-link" disabled="disabled"><i class="tf-icon bx bx-chevron-left"></i></a>
                @else
                    <a class="page-link" href="{{ $user->path() . '?page=' . ($user->currentPage() - 1) }}"><i
                            class="tf-icon bx bx-chevron-left"></i></a>
                @endif
            </li>
            @for ($i = 1; $i <= $user->lastPage(); $i++)
                <li class="page-item {{ $user->currentPage() == $i ? 'active' : '' }}">
                    <a class="page-link" href="{{ $user->path() . '?page=' . $i }}">{{ $i }}</a>
                </li>
            @endfor
            @if ($user->currentPage() + 1 > $user->lastPage())
                <li class="page-item next">
                    <a class="page-link"><i class="tf-icon bx bx-chevron-right"></i></a>
                </li>
            @else
                <li class="page-item next">
                    <a class="page-link" href="{{ $user->path() . '?page=' . ($user->currentPage() + 1) }}"><i
                            class="tf-icon bx bx-chevron-right"></i></a>
                </li>
            @endif
            <li class="page-item last">
                <a class="page-link" href="{{ $user->path() . '?page=' . $user->lastPage() }}"><i
                        class="tf-icon bx bx-chevrons-right"></i></a>
            </li>
        </ul>
    </nav>
@else
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-end">
            <li class="page-item prev">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);">1</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);">2</a>
            </li>
            <li class="page-item active">
                <a class="page-link" href="javascript:void(0);">3</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);">4</a>
            </li>
            <li class="page-item">
                <a class="page-link" href="javascript:void(0);">5</a>
            </li>
            <li class="page-item next">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
            </li>
        </ul>
    </nav>
@endif
