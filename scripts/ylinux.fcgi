#!/usr/bin/env python
# -*- coding: utf-8 -*-
import sys, os

# 添加自定义Python路径
sys.path.insert(0, "/usr/local/bin/python")
#sys.path.insert(0, os.path.dirname(os.path.abspath(__file__)) + 'django')
sys.path.insert(0, os.path.dirname(os.path.abspath(__file__)))
sys.path.insert(0, os.path.dirname(os.path.abspath(__file__)) + 'ylinux/lib')

# 切换到工程目录（可选）
# os.chdir("/www/user.root.dir/site.mount.point/htdocs")

# 设定DJANGO_SETTINGS_MODULE环境变量
#os.environ['DJANGO_SETTINGS_MODULE'] = "myproject.settings"
os.environ['DJANGO_SETTINGS_MODULE'] = "ylinux.ysettings"

from django.core.servers.fastcgi import runfastcgi
runfastcgi(method="threaded", daemonize="false") 
