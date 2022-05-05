<x-tests.app>
  <x-slot name="header">ヘッダー1</x-slot>
    コンポーネントテスト1です。

    <x-tests.card title="タイトル" content="コンテンツ" :message="$message"/>

    <x-tests.card title="タイトルなんです"/>

    <x-tests.card title="CSSを変更したい" class="bg-red-300 shadow-md w-1/4 p-2 "/>
</x-tests.app>
