@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>お問い合わせ</h2>
            </div>
            <form action="/contact/confirm" class="form" method="POST">
                @csrf
                <div class="form-group">
                    <div class="form-group-title">
                        <span class="form__label--item">お名前</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="text" name="name" placeholder="例: テスト 太郎" value="{{ old('name') }}" />
                        </div>
                        <div class="form-error">
                            @error('name')
                              {{ $message }} 
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-title">
                        <span class="form__label--item">メールアドレス</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="email" name="email" placeholder="例: test@example.com" value="{{ old('email') }}" />
                        </div>
                        <div class="form-error">
                            @error('email')
                              {{ $message }} 
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-title">
                        <span class="form__label--item">電話番号</span>
                        <span class="form__label--required">必須</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--text">
                            <input type="tel" name="tel" placeholder="例: 090-1234-5678" value="{{ old('tel') }}" />
                        </div>
                        <div class="form-error">
                            @error('tel')
                              {{ $message }} 
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-group-title">
                        <span class="form__label--item">お問い合わせ内容</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__input--textarea">
                            <textarea name="content" placeholder="例: 資料をいただきたいです"></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-buttons">
                    <button type="submit" class="form-button -submit">送信</button>
                </div>
            </form>
        </div>
@endsection