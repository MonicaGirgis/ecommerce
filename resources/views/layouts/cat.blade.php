@foreach($cats as $cat)
                                                <li>
                                                    <a href="{{ Route('categories',$cat->id) }}"  style="margin-right: 100px;" >
                                                    {{$cat->name}} <span id="nofprod">({{$cat->count}})</span>
                                                    </a>
                                                </li>
                                            @endforeach
                                            <div class="col-md-3 col-sm-6">
                                    <div class="footer-title res-mrg">
                                        <h3>categories</h3>
                                        <div class="footer-menu">
                                        <ul>
                                            @include('layouts.cat')
                                        </ul>
                                         </div>
                                    </div>
                                 </div>