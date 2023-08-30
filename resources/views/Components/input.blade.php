@props([
    'id','name','type' => 'text','label' =>'',value
    ])
<div class="mb-3">
          <label for="" class="form-label">{{$label}}</label>
          <input type="{{$type }}"
                name="{{$name}}"
                id="{{$id}}"
                value="{{$value}}"
                class="form-control" 
                placeholder="" 
                aria-describedby="helpId" 
                {{$attributes}}
            >
          <small id="helpId" class="text-muted">{{$attributes['lablesmall']}}</small>
</div>