# WordPress Zen Theme

一个基于极简主义设计理念构建的 WordPress 主题，适合文字内容、技术文章和个人站点。

演示站：https://blog.qwerxyz.com

## 特色

- 响应式布局，支持移动端和桌面端。
- 支持系统深色模式。
- 内置文章目录、阅读进度条和返回顶部。
- 集成 Highlight.js 代码高亮。
- 内置文章归档和友情链接页面模板。
- 优化常见媒体内容展示，包括音频、文件下载和视频嵌入。
- 输出 JSON-LD 结构化数据。

## 安装

在 [Releases](https://github.com/qwer-xyz/wordpress-zen/releases) 下载最新 `zen.zip`，然后在 WordPress 后台上传启用：

1. 进入 `外观 -> 主题 -> 安装主题`。
2. 上传 `zen.zip` 并启用主题。
3. 在 `外观 -> 菜单` 创建菜单，并绑定到 `Primary Menu`。

## 页面模板

主题内置两个页面模板：

- `Archives Template`：文章归档页。
- `Links Template`：友情链接页。

新建页面后，在页面模板中选择对应模板即可。

## 友链

主题会开启 WordPress 链接管理器。可在后台添加链接，并填写名称、网址、描述和图像地址。

## 开发

安装依赖：

```bash
npm ci
```

开发监听：

```bash
npm run dev
```

构建样式：

```bash
npm run build
```

## 协议

GPL-3.0-or-later
