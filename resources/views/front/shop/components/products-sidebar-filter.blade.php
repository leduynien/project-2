 <form action="{{ request()-> segment(2) == 'product' ? 'shop' : '' }}">
                    <div class="filter-widget">
                        <h4 class="fw-title">Categories</h4>
                        <ul class="filter-catagories">

                        @foreach($categories as $category)
                            <li><a href="shop/{{ $category->name }}">{{ $category->name }}</a></li>
                        @endforeach
                        </ul>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Brand</h4>
                        <div class="fw-brand-check">
                            @foreach($brands as $brand)
                            <div class="bc-item">
                                <label for="bc-{{ $brand->id}}">
                                    {{$brand->name }}
                                    <input type="checkbox" 
                                    {{ (request("brand")[$brand->id] ?? '') == 'on' ? 'checked' : '' }}
                                     id="bc-{{ $brand->id}}" 
                                     name="brand[{{ $brand->id }}]"
                                      onchange="this.form.submit();">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>                   
                    <div class="filter-widget">
                        <h4 class="fw-title">Size</h4>
                        <div class="fw-size-choose">
                            <div class="sc-item">
                                <input type="radio" id="0,1l-size" name ="size" value="0,1l" onchange="this.form.submit();" {{ request('size') == '0,1l' ? 'checked' : '' }}>
                                <label for="0,1l-size" class=" {{ request('size') == '0,1l' ? 'active' : '' }}">0,1l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="0,2l-size" name ="size" value="0,2l" onchange="this.form.submit();" {{ request('size') == '0,2l' ? 'checked' : '' }}>
                                <label for="0,2l-size" class=" {{ request('size') == '0,2l' ? 'active' : '' }}">0,2l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="0,3l-size" name ="size" value="0,3l" onchange="this.form.submit();" {{ request('size') == '0,3l' ? 'checked' : '' }}>
                                <label for="0,3l-size" class=" {{ request('size') == '0,3l' ? 'active' : '' }}">0,3l</label>
                            </div>
                            <div class="sc-item">
                                <input type="radio" id="0,5l-size" name ="size" value="0,5l" onchange="this.form.submit();" {{ request('size') == '0,5l' ? 'checked' : '' }}>
                                <label for="0,5l-size" class=" {{ request('size') == '0,5l' ? 'active' : '' }}">0,5l</label>
                            </div>
                        </div>
                    </div>
                    <div class="filter-widget">
                        <h4 class="fw-title">Tags</h4>
                        <div class="fw-tags">
                            <a href="#">Gucci</a>
                                <a href="#">Louis Vuitton</a>
                                <a href="#">YSL</a>
                                <a href="#">Chanel</a>
                                <a href="#">Celine</a>
                        </div>
                    </div>
 </form>