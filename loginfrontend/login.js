/*global $*/
$(document).ready(function () {
    
    'use strict';
    $(".input-group").fadeOut();
    
    $(".login_page").animate({
        top: '0'
    }, 1000);
    
    $(".login_page").animate({
        width: '600px'
    }, 1000);
    
    $(".login_page").animate({
        height: '415px',
        padding: '25px 60px'
    }, 1000, function () {
        
        $(".header").slideDown(1000, function () {
            
            $(".form_page label:nth-of-type(1)").fadeIn().animate({
                left: '0'
            }, 500, function () {
                
                $(".input-group:nth-of-type(1)").slideDown(1000, function () {
                    
                    $(".form_page label:nth-of-type(2)").fadeIn().animate({
                        left: '0'
                    }, 500, function () {
                        
                        $(".input-group:nth-of-type(2)").slideDown(1000, function () {
                            
                            $(".btn-login_page").css("display", "block").animate({
                                display: 'block',
                                bottom: '0'
                            }, 500, function () {
                                
                                $("ul li:nth-of-type(1)").css("display", "inline").animate({
                                    
                                    bottom: '0'
                                }, 500, function () {
                                    
                                    $("ul li:nth-of-type(2)").css("display", "inline").animate({
                                        
                                        bottom: '0'
                                    }, 500, function () {
                                        
                                        $("ul li:nth-of-type(3)").css("display", "inline").animate({
                                    
                                            bottom: '0'
                                        }, 500, function () {
                                            
                                            $(".login_page").animate({
                                                borderTopRightRadius: '80px',
                                                borderBottomLeftRadius: '80px'
                                            }, 1000);
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            });
        });
    });
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
});