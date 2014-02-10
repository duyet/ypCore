using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ypcore
{
    #region Yp_admin_logs
    public class Yp_admin_logs
    {
        #region Member Variables
        protected int _id;
        protected string _username;
        protected string _message;
        protected int _time;
        protected string _ip;
        protected string _user_agent;
        protected string _url;
        #endregion
        #region Constructors
        public Yp_admin_logs() { }
        public Yp_admin_logs(int id, string username, string message, int time, string ip, string user_agent, string url)
        {
            this._id=id;
            this._username=username;
            this._message=message;
            this._time=time;
            this._ip=ip;
            this._user_agent=user_agent;
            this._url=url;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Message
        {
            get {return _message;}
            set {_message=value;}
        }
        public virtual int Time
        {
            get {return _time;}
            set {_time=value;}
        }
        public virtual string Ip
        {
            get {return _ip;}
            set {_ip=value;}
        }
        public virtual string User_agent
        {
            get {return _user_agent;}
            set {_user_agent=value;}
        }
        public virtual string Url
        {
            get {return _url;}
            set {_url=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ypcore
{
    #region Yp_data
    public class Yp_data
    {
        #region Member Variables
        protected int _id;
        protected string _name;
        protected string _value;
        protected int _serialized;
        #endregion
        #region Constructors
        public Yp_data() { }
        public Yp_data(string name, string value, int serialized)
        {
            this._name=name;
            this._value=value;
            this._serialized=serialized;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Value
        {
            get {return _value;}
            set {_value=value;}
        }
        public virtual int Serialized
        {
            get {return _serialized;}
            set {_serialized=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ypcore
{
    #region Yp_module_news
    public class Yp_module_news
    {
        #region Member Variables
        protected int _post_id;
        protected string _title;
        protected string _title_alias;
        protected string _post;
        protected string _tag;
        protected string _keyword;
        protected int _reply_count;
        protected int _view_count;
        protected int _user_id;
        protected string _username;
        protected int _post_date;
        protected string _like;
        protected int _like_count;
        protected string _status;
        protected int _time_last_change;
        #endregion
        #region Constructors
        public Yp_module_news() { }
        public Yp_module_news(string title, string title_alias, string post, string tag, string keyword, int reply_count, int view_count, int user_id, string username, int post_date, string like, int like_count, string status, int time_last_change)
        {
            this._title=title;
            this._title_alias=title_alias;
            this._post=post;
            this._tag=tag;
            this._keyword=keyword;
            this._reply_count=reply_count;
            this._view_count=view_count;
            this._user_id=user_id;
            this._username=username;
            this._post_date=post_date;
            this._like=like;
            this._like_count=like_count;
            this._status=status;
            this._time_last_change=time_last_change;
        }
        #endregion
        #region Public Properties
        public virtual int Post_id
        {
            get {return _post_id;}
            set {_post_id=value;}
        }
        public virtual string Title
        {
            get {return _title;}
            set {_title=value;}
        }
        public virtual string Title_alias
        {
            get {return _title_alias;}
            set {_title_alias=value;}
        }
        public virtual string Post
        {
            get {return _post;}
            set {_post=value;}
        }
        public virtual string Tag
        {
            get {return _tag;}
            set {_tag=value;}
        }
        public virtual string Keyword
        {
            get {return _keyword;}
            set {_keyword=value;}
        }
        public virtual int Reply_count
        {
            get {return _reply_count;}
            set {_reply_count=value;}
        }
        public virtual int View_count
        {
            get {return _view_count;}
            set {_view_count=value;}
        }
        public virtual int User_id
        {
            get {return _user_id;}
            set {_user_id=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual int Post_date
        {
            get {return _post_date;}
            set {_post_date=value;}
        }
        public virtual string Like
        {
            get {return _like;}
            set {_like=value;}
        }
        public virtual int Like_count
        {
            get {return _like_count;}
            set {_like_count=value;}
        }
        public virtual string Status
        {
            get {return _status;}
            set {_status=value;}
        }
        public virtual int Time_last_change
        {
            get {return _time_last_change;}
            set {_time_last_change=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ypcore
{
    #region Yp_module_news_cat
    public class Yp_module_news_cat
    {
        #region Member Variables
        protected int _cat_id;
        protected string _title;
        protected string _title_alias;
        protected string _description;
        protected int _cat_parent_id;
        protected int _order;
        #endregion
        #region Constructors
        public Yp_module_news_cat() { }
        public Yp_module_news_cat(string title, string title_alias, string description, int cat_parent_id, int order)
        {
            this._title=title;
            this._title_alias=title_alias;
            this._description=description;
            this._cat_parent_id=cat_parent_id;
            this._order=order;
        }
        #endregion
        #region Public Properties
        public virtual int Cat_id
        {
            get {return _cat_id;}
            set {_cat_id=value;}
        }
        public virtual string Title
        {
            get {return _title;}
            set {_title=value;}
        }
        public virtual string Title_alias
        {
            get {return _title_alias;}
            set {_title_alias=value;}
        }
        public virtual string Description
        {
            get {return _description;}
            set {_description=value;}
        }
        public virtual int Cat_parent_id
        {
            get {return _cat_parent_id;}
            set {_cat_parent_id=value;}
        }
        public virtual int Order
        {
            get {return _order;}
            set {_order=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ypcore
{
    #region Yp_module_news_comment
    public class Yp_module_news_comment
    {
        #region Member Variables
        protected int _id;
        protected int _post_id;
        protected int _user_id;
        protected string _username;
        protected string _email;
        protected string _comment;
        protected int _date;
        protected string _like;
        protected int _like_count;
        protected string _status;
        protected int _parent_id;
        #endregion
        #region Constructors
        public Yp_module_news_comment() { }
        public Yp_module_news_comment(int post_id, int user_id, string username, string email, string comment, int date, string like, int like_count, string status, int parent_id)
        {
            this._post_id=post_id;
            this._user_id=user_id;
            this._username=username;
            this._email=email;
            this._comment=comment;
            this._date=date;
            this._like=like;
            this._like_count=like_count;
            this._status=status;
            this._parent_id=parent_id;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual int Post_id
        {
            get {return _post_id;}
            set {_post_id=value;}
        }
        public virtual int User_id
        {
            get {return _user_id;}
            set {_user_id=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Comment
        {
            get {return _comment;}
            set {_comment=value;}
        }
        public virtual int Date
        {
            get {return _date;}
            set {_date=value;}
        }
        public virtual string Like
        {
            get {return _like;}
            set {_like=value;}
        }
        public virtual int Like_count
        {
            get {return _like_count;}
            set {_like_count=value;}
        }
        public virtual string Status
        {
            get {return _status;}
            set {_status=value;}
        }
        public virtual int Parent_id
        {
            get {return _parent_id;}
            set {_parent_id=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ypcore
{
    #region Yp_module_news_tag
    public class Yp_module_news_tag
    {
        #region Member Variables
        protected int _id;
        protected int _post_id;
        protected string _tag;
        #endregion
        #region Constructors
        public Yp_module_news_tag() { }
        public Yp_module_news_tag(int post_id, string tag)
        {
            this._post_id=post_id;
            this._tag=tag;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual int Post_id
        {
            get {return _post_id;}
            set {_post_id=value;}
        }
        public virtual string Tag
        {
            get {return _tag;}
            set {_tag=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ypcore
{
    #region Yp_sessions
    public class Yp_sessions
    {
        #region Member Variables
        protected string _hash;
        protected int _last_time;
        #endregion
        #region Constructors
        public Yp_sessions() { }
        public Yp_sessions(string hash, int last_time)
        {
            this._hash=hash;
            this._last_time=last_time;
        }
        #endregion
        #region Public Properties
        public virtual string Hash
        {
            get {return _hash;}
            set {_hash=value;}
        }
        public virtual int Last_time
        {
            get {return _last_time;}
            set {_last_time=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ypcore
{
    #region Yp_settings
    public class Yp_settings
    {
        #region Member Variables
        protected string _setting;
        protected string _value;
        protected bool _serialized;
        #endregion
        #region Constructors
        public Yp_settings() { }
        public Yp_settings(string value, bool serialized)
        {
            this._value=value;
            this._serialized=serialized;
        }
        #endregion
        #region Public Properties
        public virtual string Setting
        {
            get {return _setting;}
            set {_setting=value;}
        }
        public virtual string Value
        {
            get {return _value;}
            set {_value=value;}
        }
        public virtual bool Serialized
        {
            get {return _serialized;}
            set {_serialized=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ypcore
{
    #region Yp_stat
    public class Yp_stat
    {
        #region Member Variables
        protected int _day;
        protected int _month;
        protected int _year;
        protected int _value;
        #endregion
        #region Constructors
        public Yp_stat() { }
        public Yp_stat(int day, int month, int year, int value)
        {
            this._day=day;
            this._month=month;
            this._year=year;
            this._value=value;
        }
        #endregion
        #region Public Properties
        public virtual int Day
        {
            get {return _day;}
            set {_day=value;}
        }
        public virtual int Month
        {
            get {return _month;}
            set {_month=value;}
        }
        public virtual int Year
        {
            get {return _year;}
            set {_year=value;}
        }
        public virtual int Value
        {
            get {return _value;}
            set {_value=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ypcore
{
    #region Yp_usergroup
    public class Yp_usergroup
    {
        #region Member Variables
        protected int _groupid;
        protected string _groupname;
        protected string _description;
        #endregion
        #region Constructors
        public Yp_usergroup() { }
        public Yp_usergroup(string groupname, string description)
        {
            this._groupname=groupname;
            this._description=description;
        }
        #endregion
        #region Public Properties
        public virtual int Groupid
        {
            get {return _groupid;}
            set {_groupid=value;}
        }
        public virtual string Groupname
        {
            get {return _groupname;}
            set {_groupname=value;}
        }
        public virtual string Description
        {
            get {return _description;}
            set {_description=value;}
        }
        #endregion
    }
    #endregion
}using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Ypcore
{
    #region Yp_users
    public class Yp_users
    {
        #region Member Variables
        protected int _userid;
        protected string _username;
        protected string _password;
        protected string _salt;
        protected string _full_name;
        protected string _email;
        protected bool _groupid;
        protected unknown _birthday;
        protected unknown _register_day;
        #endregion
        #region Constructors
        public Yp_users() { }
        public Yp_users(string username, string password, string salt, string full_name, string email, bool groupid, unknown birthday, unknown register_day)
        {
            this._username=username;
            this._password=password;
            this._salt=salt;
            this._full_name=full_name;
            this._email=email;
            this._groupid=groupid;
            this._birthday=birthday;
            this._register_day=register_day;
        }
        #endregion
        #region Public Properties
        public virtual int Userid
        {
            get {return _userid;}
            set {_userid=value;}
        }
        public virtual string Username
        {
            get {return _username;}
            set {_username=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Salt
        {
            get {return _salt;}
            set {_salt=value;}
        }
        public virtual string Full_name
        {
            get {return _full_name;}
            set {_full_name=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual bool Groupid
        {
            get {return _groupid;}
            set {_groupid=value;}
        }
        public virtual unknown Birthday
        {
            get {return _birthday;}
            set {_birthday=value;}
        }
        public virtual unknown Register_day
        {
            get {return _register_day;}
            set {_register_day=value;}
        }
        #endregion
    }
    #endregion
}