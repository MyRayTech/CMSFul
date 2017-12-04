export default {
  items: [
    {
      name: 'Dashboard',
      url: '/dashboard',
      icon: 'fa fa-dashboard'
    },
    {
        name: 'General',
        url: '/general',
        icon: 'fa fa-gears',
        children: [
            {
                name: 'Settings',
                url: '/general/settings',
                icon: 'fa fa-gear'
            }
        ]
    },
    {
        name: 'Content',
        url: '/content',
        icon: 'fa fa-files-o',
        children: [
            {
                name: 'Page',
                url: '/content/page',
                icon: 'fa fa-file-o'
            },
            {
                name: 'Post',
                url: '/content/post',
                icon: 'fa fa-file-text-o'
            },
            {
                name: 'Article',
                url: '/content/article',
                icon: 'fa fa-newspaper-o'
            },
            {
                name: 'Project',
                url: '/content/project',
                icon: 'fa fa-file-image-o'
            }
        ]
    }
  ]
}
