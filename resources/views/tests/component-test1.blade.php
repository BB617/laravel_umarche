<x-tests.app>
  <x-slot name="header">ヘッダー1</x-slot>
    コンポーネントテスト1です。

    <x-tests.card title="タイトル" content="コンテンツ" :message="$message"/>

    <x-tests.card title="タイトルなんです"/>
</x-tests.app>
